<p class="accountName">
    <i class="fas fa-user-tie"></i>
    <span>{{Auth::user()->user_name}}</span>
</p>
@if(Auth::user()->id)
    <div class="logOut">
        <a href="/logout"><i class="fas fa-sign-out-alt"></i></a>
    </div>
@else
    <div class="logIn">
        <a href="/login"><i class="fas fa-sign-out-alt"></i></a>
    </div>
@endif
