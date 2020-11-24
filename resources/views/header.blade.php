<header class="header">
    <div class="headerInner">
        <div class="createRoom buttonWrap">
            <button for="createRoom" class="jscBtnOpenModal jscBtnCreateRoom btnCreateRoom button">
                <i class="fas fa-plus"></i>
                <span>{{Lang::get('const.common.new_room_name')}}</span>
            </button>
            <div class="jscBackgroundLayer backgroundLayer dn"></div>
            <div class="jscActionModal actionModal createRoomModal dn">
                <form action="">
                    <dl class="createRoomConditions">
                        <dt>{{Lang::get('const.common.new_room_name')}}</dt>
                        <dd>
                            <input type="text" name="createRoomName" class="createRoomName">
                        </dd>
                        <dt>{{Lang::get('const.common.add_member')}}</dt>
                        <dd>
                            <div class="createRoomMember">
                                <ul class="createRoomMemberList">
                                    <li>名字 名前<i class="fas fa-times"></i></li>

                                </ul>
                            </div>
                            <p class="numberOfSelected">1 名</p>
                        </dd>
                    </dl>
                    <div class="selectAll buttonWrap">
                        <a href="javascript:void(0)" class="button">全選択</a>
                    </div>
                    <!--roomメンバー一覧選択-->
                    <ul class="selectMemberList">
                        @foreach($users as $user)
                            <li>
                                <input type="checkbox" name="selectMember" id="userId{{$user['user_id']}}" class="selectMemberCheck">
                                <label for="userId1" class="selectMember">{{$user['user_name']}}</label>
                                <input type="hidden" name="user_id" value="{{$user['user_id']}}">{{$user['user_id']}}</input>
                            </li>
                        @endforeach
                    </ul>
                    <div class="submitCreateRoom buttonWrap">
                        <button class="btnSubmitCreateRoom button">ルーム作成</button>
                    </div>
                </form>
            </div>
        </div>
        <p class="accountName">
            <i class="fas fa-user-tie"></i>
            <span>$アカウント名</span>
        </p>
        <div class="logOut">
            <a href="javascript:void(0)">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </div>
    </div>
</header>
