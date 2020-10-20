<!-- Archive Modal -->
<div class="modal fade" id="archiveTicket" tabindex="-1" aria-labelledby="archiveTicketarchiveTicket" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="archiveTicket">Archive</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ route('ticket.archive', $ticket ?? '') }}" method="post">
            @csrf

            <div class="modal-body">
                <p>Archiving will move this ticket to archived folder and change its status to Closed. All the ticket conversation and details will be inaccessible.</p>

                <p>Are you sure you want to continue?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Archive</button>
            </div>
        </form>
    </div>
  </div>
</div>
