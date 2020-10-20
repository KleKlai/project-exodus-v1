@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <div class="card card-body">

                @foreach($conversation as $conversation)
                    <blockquote class="blockquote">
                        <p class="mb-0 small" style="white-space: pre-wrap;">{{ $conversation->message }}</p>
                        <footer class="blockquote-footer">
                            {{ ($conversation->user->name == Auth::user()->name) ? 'You' : $conversation->user->name}}
                        </footer>
                    </blockquote>
                @endforeach
            </div>

            <div class="card card-body mt-2">

                @if($ticket->archive == true || $ticket->status == 'Closed')
                    <h3>Ticket has been closed</h3>
                @else
                <form action="{{ route('conversation.store') }}" method="post">
                    @csrf
                    <input type="text" name="ticket_id" value="{{ $ticket->id }}" class="form-control d-none" readonly>
                    <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="3" placeholder="Write your message here" required></textarea>

                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button type="submit" class="btn btn-success float-right mt-2">Send</button>
                </form>
                @endif
            </div>


        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Ticket Details # {{ $ticket->id }}

                    <div class="dropdown float-right">
                        <a href="javascript:void();" class="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item
                            {{ ($ticket->archive == true || $ticket->status == 'Closed') ? 'd-none' : '' }}
                            " href="javascript();" data-toggle="modal" data-target="#updateArtModal">
                                Update
                            </a>
                            <a class="dropdown-item {{ ($ticket->archive) ? 'd-none' : '' }}" href="javascript();" data-toggle="modal" data-target="#archiveTicket">
                                Archive
                            </a>
                            <a class="dropdown-item" href="javascript();" data-toggle="modal" data-target="#deleteArtModal">
                                Delete
                            </a>
                        </div>
                    </div>

                    <div class="float-right mr-3">
                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <i class="fa fa-sticky-note-o"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="collapse mb-5" id="collapseExample">
                        <div class="">
                            <form action="{{ route('ticket.note', $ticket) }}" method="POST">
                                @csrf

                                <textarea class="mb-2 {{ ($ticket->archive == true || $ticket->status == 'Closed') ? 'form-control-plaintext' : 'form-control' }}"
                                     name="note" rows="2" maxlength="255" placeholder="Write down your notes here">{{ $ticket->note ?? '' }}</textarea>

                                <button class="btn btn-outline-success float-right
                                @if($ticket->archive == true || $ticket->status == 'Closed') d-none @endif
                                ">Save</button>
                            </form>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Customer</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ticket->user->name }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Email</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ticket->email }}" disabled>
                        </div>
                    </div>

                    @if($ticket->archive == true || $ticket->status == 'Closed')

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Status</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ticket->status }}" disabled>
                        </div>
                    </div>

                    @else

                    <form action="{{ route('ticket.status', $ticket) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label font-weight-bold">Status</label>
                            <div class="col-sm-7">
                                <select name="status" class="form-control">
                                    <option value="Open" @if($ticket->status == 'Open') selected @endif>Open</option>
                                    <option value="On Review" @if($ticket->status == 'On Review') selected @endif>On Review</option>
                                    <option value="Closed" @if($ticket->status == 'Closed') selected @endif>Closed</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>

                    @endif

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Subject</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" value="{{ $ticket->subject }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Description</label>
                        <div class="col-sm-9">
                            <textarea rows="3" class="form-control-plaintext" disabled>{{ $ticket->description }}</textarea>
                        </div>
                    </div>
                    @if(!empty($ticket->attachment))
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label font-weight-bold">Attachment</label>
                        <div class="col-sm-9">
                            <a href="#download" class="pt-3">File Name.jpg</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@include('services.ticket_component_modal')
@endsection
