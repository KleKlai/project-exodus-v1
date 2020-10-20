<!-- Profile User Delete Modal -->
<div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="deleteAccountLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <form action="{{ route('profile.delete', Auth::user() ?? '') }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <h3>Delete your account</h3>

                    <p class="font-weight-normal">You are about to delete your account: <span class="font-weight-bold">{{ Auth::user()->name ?? '' }}</span> </p>

                    <p class="font-weight-normal">If you continue the deletion process:</p>

                    <ul>
                        <li>Permanent deletion process will be initiated. Be careful you will lose access to your account permanently!</li>
                        <li>You can cancel your deletion process within 30 days. </li>
                        <li>We will delete all of your personal data from Mindanao Art account within 30 days, except in a few cases where required for legimate business or legal processes.</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete account</button>
                </div>
            </form>
        </div>
    </div>
</div>
