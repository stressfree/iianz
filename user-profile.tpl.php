<div class="profile">
  <?php if ($account->uid == $user->uid) { ?>
  <div class="edit-user">
  	<a href="/user/<?php print $account->uid ?>/edit">Update my account details</a>
  </div>
  <?php } ?>
  <?php print $user_profile; ?>
</div>