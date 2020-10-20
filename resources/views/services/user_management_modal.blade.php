<!-- Delete User Modal -->
<div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="deleteAccountLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="{{ route('user.destroy', $user ?? '') }}" method="POST">
                @csrf
                @method('DELETE')

                <div class="modal-body">
                    <h3>Delete user account</h3>

                    <p class="font-weight-normal">You are about to delete user: <span class="font-weight-bold">{{ Auth::user()->name ?? '' }}</span> </p>

                    <p class="font-weight-normal">
                        User will no longer be able to access mindanao art and all user personal account information will be permanently removed after 30 days.
                    </p>

                    <span class="font-weight-bold">Deletion is an irreversible process. Please read carefully.</span>

                    <p class="font-weight-normal mt-3">
                        When you delete user account, user profile and personal information will be erased. Art uploaded by the user will remain, but uesr personally identifiable account information will no longer be attached to the artwork.
                    </p>

                    <p class="font-weight-normal">
                        {{ "After you delete user account, user can no longer use the same email address to create account." }}
                    </p>

                    <p class="font-weight-normal">
                        {{ 'To begin the deletion process click "Delete account" button below. User will receive an email notification for account deletion.' }}
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete account</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Override Permission User Modal -->
<div class="modal fade" id="overridePermission" tabindex="-1" role="dialog" aria-labelledby="overridePermission" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#" method="POST">

                <div class="modal-body text-center">
                <h3>Are you sure you would like to override user permission?</h3>

                <p class="font-weight-normal">
                    This may cause some serious trouble. And may affect user interaction with the system.
                </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="override-permission" class="btn btn-dark">Proceed Anyway</button>
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
