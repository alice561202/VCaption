<!DOCTYPE html>
<html lang="ja">
@include('head')
<body>
<div class="wrapper">
    @include('header')
    <main class="mainContentWrap">
        <dl class="roomCategory">
            @foreach($rooms as $room)
            <dt>{{Lang::get('const.common.room_favarite')}}</dt>
            <dd>
                <ul class="roomList">
                    <li>
                        <!--roomImg-->
                        <p class="roomImg active" style="background-image: url('/images/{{$room['room_img']}}');">
                            <span class="roomName">{{$room['room_name']}}</span>
                            <i class="fas fa-heart favoriteIcon dn"></i>
                            <i class="far fa-heart favoriteIcon"></i>
                        </p>
                        <!--END roomImg-->

                        <div class="roomDetailWrap buttonWrap">
                            <button class="jscBtnShowRoomDetail btnShowRoomDetail button">詳細を見る</button>
                            <!--サイドバー-->
                            <div class="jscRoomDetail roomDetail">
                                <div class="roomDetailInner">
                                    <div class="closeRoomDetail">
                                        <label for="roomId1" class="jscBtnCloseRoomDetail btnCloseRoomDetail">
                                            <i class="fas fa-times"></i>
                                        </label>
                                    </div>
                                    <div class="roomImg" style="background-image: url('/images/{{$room['room_img']}}');">
                                        <button class="btnEditRoomImg">
                                            <i class="fas fa-images icnEditRoomImg"></i>
                                        </button>
                                    </div>
                                    <div class="editRoomNameWrap">
                                        <form action="">
                                            <input type="text" name="roomName" value="{{$room['room_name']}}" class="jscEditRoomName editRoomName" disabled>
                                            <button class="jscBtnEditRoomName btnEditRoomName"><i class="fas fa-edit"></i></button>
                                            <div class="jscSaveRoomName saveRoomName buttonWrap dn">
                                                <p href="javascript:void(0);" class="btnSaveRoomName button">保存</p>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="addFavoriteRoom buttonWrap">
                                        <form action="">
                                            <button class="btnFavoriteRoom button addedFavorite">
                                                {{Lang::get('const.common.room_favarite')}}
                                                <i class="fas fa-heart favoriteIcon dn"></i>
                                                <i class="far fa-heart favoriteIcon"></i>
                                            </button>
                                        </form>
                                    </div><!--addFavoriteRoom buttonWrap-->
                                    <ul class="roomMemberList">
                                        <li>
                                            <i class="fas fa-crown icnCrown"></i>
                                            <p class="joinedRoomMember active">$メンバー名</p>
                                            <div class="jscModalParent deleteRoomMember buttonWrap">
                                                <button class="jscBtnOpenModal btnDeleteRoomMember button">{{Lang::get('const.common.exit')}}</button>
                                                <div class="jscBackgroundLayer backgroundLayer dn"></div>
                                                <div class="jscActionModal actionModal dn">
                                                    <p class="descriptionAction">
                                                        メンバーを退出させますか？
                                                    </p>
                                                    <ul class="actionBtn">
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">{{Lang::get('const.common.cancel')}}</a>
                                                        </li>
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="btnSubmit button">{{Lang::get('const.common.exit')}}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="addMember">
                                        <button class="jscBtnOpenModal">
                                            <i class="fas fa-user-plus"></i>
                                        </button>
                                        <div for="addMember" class="jscBackgroundLayer backgroundLayer dn"></div>
                                        <div class="jscActionModal actionModal editRoomModal dn">
                                            <form action="">
                                                <dl class="createRoomConditions">
                                                    <dt>{{Lang::get('const.common.new_room_name')}}</dt>
                                                    <dd>
                                                        <div class="createRoomMember">
                                                            <ul class="createRoomMemberList">
                                                                <li>名字 名前<i class="fas fa-times"></i></li>
                                                                <li>名字 名前<i class="fas fa-times"></i></li>
                                                                <li>名字 名前<i class="fas fa-times"></i></li>
                                                            </ul>
                                                        </div>
                                                        <p class="numberOfSelected">1 名</p>
                                                    </dd>
                                                </dl>
                                                <div class="selectAll buttonWrap">
                                                    <a href="javascript:void(0)" class="button">{{Lang::get('const.common.select_all')}}</a>
                                                </div>
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
                                                    <button class="btnSubmitCreateRoom button">招待</button>
                                                </div>
                                            </form>
                                        </div><!--END jscActionModal-->
                                    </div><!--END addMember-->
                                    <ul class="actionBtnList">
                                        <li class="jscModalParent startChat buttonWrap">
                                            <button for="startChatRoomId1" class="jscBtnOpenModal btnStartChat button">{{Lang::get('const.common.call')}}</button>
                                            <div for="startChatRoomId1" class="jscBackgroundLayer backgroundLayer dn"></div>
                                            <div class="jscActionModal actionModal dn">
                                                <p class="descriptionAction">
                                                    ミーティングを開始しますか？
                                                </p>
                                                <ul class="actionBtn">
                                                    <li class="buttonWrap">
                                                        <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">{{Lang::get('const.common.cancel')}}</a>
                                                    </li>
                                                    <li class="buttonWrap">
                                                        <a href="javascript:void(0);" class="btnOk button">OK</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="jscModalParent deleteChatRoom buttonWrap">
                                            <button for="deleteRoomId1" class="jscBtnOpenModal btnDeleteChatRoom button">削除</button>
                                            <div for="deleteRoomId1" class="jscBackgroundLayer backgroundLayer dn"></div>
                                            <div class="jscActionModal actionModal dn">
                                                <p class="descriptionAction">
                                                    一度削除したルームは元に戻せません。<br>
                                                    ルームを削除しますか？
                                                </p>
                                                <ul class="actionBtn">
                                                    <li class="buttonWrap">
                                                        <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">キャンセル</a>
                                                    </li>
                                                    <li class="buttonWrap">
                                                        <a href="javascript:void(0);" class="btnDelete button">削除</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="jscModalParent leaveChatRoom buttonWrap">
                                            <label class="jscBtnOpenModal btnLeaveChatRoom button">退出</label>
                                            <label class="jscBackgroundLayer backgroundLayer dn"></label>
                                            <div class="jscActionModal actionModal dn">
                                                <p class="descriptionAction">
                                                    <span>あなたはこのルームの管理者になっています。<br></span>ルームを退出しますか？
                                                </p>
                                                <ul class="actionBtn">
                                                    <li class="buttonWrap">
                                                        <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">キャンセル</a>
                                                    </li>
                                                    <li class="buttonWrap">
                                                        <a href="javascript:void(0);" class="btnSubmit button">退出</a>
                                                    </li>
                                                </ul>
                                            </div><!--END jscActionModal-->
                                        </li>
                                    </ul><!--actionBtnList-->
                                </div><!--END roomDetailInner-->
                            </div><!--END jscRoomDetail -->
                        </div><!--END roomDetailWrap buttonWrap-->
                    </li>
                </ul>
            </dd>
            <!--作成ルーム-->
            <dt>{{Lang::get('const.common.add_room')}}</dt>
                <dd>
                    <ul class="roomList">
                        <li>
                            <!--roomImg-->
                            <p class="roomImg active" style="background-image: url('/images/{{$room['room_img']}}');">
                                <span class="roomName">{{$room['room_name']}}</span>
                                <i class="fas fa-heart favoriteIcon dn"></i>
                                <i class="far fa-heart favoriteIcon"></i>
                            </p>
                            <!--END roomImg-->

                            <div class="roomDetailWrap buttonWrap">
                                <button class="jscBtnShowRoomDetail btnShowRoomDetail button">詳細を見る</button>
                                <!--サイドバー-->
                                <div class="jscRoomDetail roomDetail">
                                    <div class="roomDetailInner">
                                        <div class="closeRoomDetail">
                                            <label for="roomId1" class="jscBtnCloseRoomDetail btnCloseRoomDetail">
                                                <i class="fas fa-times"></i>
                                            </label>
                                        </div>
                                        <div class="roomImg" style="background-image: url('/images/{{$room['room_img']}}');">
                                            <button class="btnEditRoomImg">
                                                <i class="fas fa-images icnEditRoomImg"></i>
                                            </button>
                                        </div>
                                        <div class="editRoomNameWrap">
                                            <form action="">
                                                <input type="text" name="roomName" value="{{$room['room_name']}}" class="jscEditRoomName editRoomName" disabled>
                                                <button class="jscBtnEditRoomName btnEditRoomName"><i class="fas fa-edit"></i></button>
                                                <div class="jscSaveRoomName saveRoomName buttonWrap dn">
                                                    <p href="javascript:void(0);" class="btnSaveRoomName button">保存</p>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="addFavoriteRoom buttonWrap">
                                            <form action="">
                                                <button class="btnFavoriteRoom button addedFavorite">
                                                    {{Lang::get('const.common.room_favarite')}}
                                                    <i class="fas fa-heart favoriteIcon dn"></i>
                                                    <i class="far fa-heart favoriteIcon"></i>
                                                </button>
                                            </form>
                                        </div><!--addFavoriteRoom buttonWrap-->
                                        <ul class="roomMemberList">
                                            <li>
                                                <i class="fas fa-crown icnCrown"></i>
                                                <p class="joinedRoomMember active">$メンバー名</p>
                                                <div class="jscModalParent deleteRoomMember buttonWrap">
                                                    <button class="jscBtnOpenModal btnDeleteRoomMember button">{{Lang::get('const.common.exit')}}</button>
                                                    <div class="jscBackgroundLayer backgroundLayer dn"></div>
                                                    <div class="jscActionModal actionModal dn">
                                                        <p class="descriptionAction">
                                                            メンバーを退出させますか？
                                                        </p>
                                                        <ul class="actionBtn">
                                                            <li class="buttonWrap">
                                                                <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">{{Lang::get('const.common.cancel')}}</a>
                                                            </li>
                                                            <li class="buttonWrap">
                                                                <a href="javascript:void(0);" class="btnSubmit button">{{Lang::get('const.common.exit')}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="addMember">
                                            <button class="jscBtnOpenModal">
                                                <i class="fas fa-user-plus"></i>
                                            </button>
                                            <div for="addMember" class="jscBackgroundLayer backgroundLayer dn"></div>
                                            <div class="jscActionModal actionModal editRoomModal dn">
                                                <form action="">
                                                    <dl class="createRoomConditions">
                                                        <dt>{{Lang::get('const.common.new_room_name')}}</dt>
                                                        <dd>
                                                            <div class="createRoomMember">
                                                                <ul class="createRoomMemberList">
                                                                    <li>名字 名前<i class="fas fa-times"></i></li>
                                                                    <li>名字 名前<i class="fas fa-times"></i></li>
                                                                    <li>名字 名前<i class="fas fa-times"></i></li>
                                                                </ul>
                                                            </div>
                                                            <p class="numberOfSelected">1 名</p>
                                                        </dd>
                                                    </dl>
                                                    <div class="selectAll buttonWrap">
                                                        <a href="javascript:void(0)" class="button">{{Lang::get('const.common.select_all')}}</a>
                                                    </div>
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
                                                        <button class="btnSubmitCreateRoom button">招待</button>
                                                    </div>
                                                </form>
                                            </div><!--END jscActionModal-->
                                        </div><!--END addMember-->
                                        <ul class="actionBtnList">
                                            <li class="jscModalParent startChat buttonWrap">
                                                <button for="startChatRoomId1" class="jscBtnOpenModal btnStartChat button">{{Lang::get('const.common.call')}}</button>
                                                <div for="startChatRoomId1" class="jscBackgroundLayer backgroundLayer dn"></div>
                                                <div class="jscActionModal actionModal dn">
                                                    <p class="descriptionAction">
                                                        ミーティングを開始しますか？
                                                    </p>
                                                    <ul class="actionBtn">
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">{{Lang::get('const.common.cancel')}}</a>
                                                        </li>
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="btnOk button">OK</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="jscModalParent deleteChatRoom buttonWrap">
                                                <button for="deleteRoomId1" class="jscBtnOpenModal btnDeleteChatRoom button">削除</button>
                                                <div for="deleteRoomId1" class="jscBackgroundLayer backgroundLayer dn"></div>
                                                <div class="jscActionModal actionModal dn">
                                                    <p class="descriptionAction">
                                                        一度削除したルームは元に戻せません。<br>
                                                        ルームを削除しますか？
                                                    </p>
                                                    <ul class="actionBtn">
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">キャンセル</a>
                                                        </li>
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="btnDelete button">削除</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="jscModalParent leaveChatRoom buttonWrap">
                                                <label class="jscBtnOpenModal btnLeaveChatRoom button">退出</label>
                                                <label class="jscBackgroundLayer backgroundLayer dn"></label>
                                                <div class="jscActionModal actionModal dn">
                                                    <p class="descriptionAction">
                                                        <span>あなたはこのルームの管理者になっています。<br></span>ルームを退出しますか？
                                                    </p>
                                                    <ul class="actionBtn">
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">キャンセル</a>
                                                        </li>
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="btnSubmit button">退出</a>
                                                        </li>
                                                    </ul>
                                                </div><!--END jscActionModal-->
                                            </li>
                                        </ul><!--actionBtnList-->
                                    </div><!--END roomDetailInner-->
                                </div><!--END jscRoomDetail -->
                            </div><!--END roomDetailWrap buttonWrap-->
                        </li>
                    </ul>
                </dd>
                <!--参加ルーム-->
                <dt>{{Lang::get('const.common.join_room')}}</dt>
                <dd>
                    <ul class="roomList">
                        <li>
                            <!--roomImg-->
                            <p class="roomImg active" style="background-image: url('/images/{{$room['room_img']}}');">
                                <span class="roomName">{{$room['room_name']}}</span>
                                <i class="fas fa-heart favoriteIcon dn"></i>
                                <i class="far fa-heart favoriteIcon"></i>
                            </p>
                            <!--END roomImg-->

                            <div class="roomDetailWrap buttonWrap">
                                <button class="jscBtnShowRoomDetail btnShowRoomDetail button">詳細を見る</button>
                                <!--サイドバー-->
                                <div class="jscRoomDetail roomDetail">
                                    <div class="roomDetailInner">
                                        <div class="closeRoomDetail">
                                            <label for="roomId1" class="jscBtnCloseRoomDetail btnCloseRoomDetail">
                                                <i class="fas fa-times"></i>
                                            </label>
                                        </div>
                                        <div class="roomImg" style="background-image: url('/images/{{$room['room_img']}}');">
                                            <button class="btnEditRoomImg">
                                                <i class="fas fa-images icnEditRoomImg"></i>
                                            </button>
                                        </div>
                                        <div class="editRoomNameWrap">
                                            <form action="">
                                                <input type="text" name="roomName" value="{{$room['room_name']}}" class="jscEditRoomName editRoomName" disabled>
                                                <button class="jscBtnEditRoomName btnEditRoomName"><i class="fas fa-edit"></i></button>
                                                <div class="jscSaveRoomName saveRoomName buttonWrap dn">
                                                    <p href="javascript:void(0);" class="btnSaveRoomName button">保存</p>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="addFavoriteRoom buttonWrap">
                                            <form action="">
                                                <button class="btnFavoriteRoom button addedFavorite">
                                                    {{Lang::get('const.common.room_favarite')}}
                                                    <i class="fas fa-heart favoriteIcon dn"></i>
                                                    <i class="far fa-heart favoriteIcon"></i>
                                                </button>
                                            </form>
                                        </div><!--addFavoriteRoom buttonWrap-->
                                        <ul class="roomMemberList">
                                            <li>
                                                <i class="fas fa-crown icnCrown"></i>
                                                <p class="joinedRoomMember active">$メンバー名</p>
                                                <div class="jscModalParent deleteRoomMember buttonWrap">
                                                    <button class="jscBtnOpenModal btnDeleteRoomMember button">{{Lang::get('const.common.exit')}}</button>
                                                    <div class="jscBackgroundLayer backgroundLayer dn"></div>
                                                    <div class="jscActionModal actionModal dn">
                                                        <p class="descriptionAction">
                                                            メンバーを退出させますか？
                                                        </p>
                                                        <ul class="actionBtn">
                                                            <li class="buttonWrap">
                                                                <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">{{Lang::get('const.common.cancel')}}</a>
                                                            </li>
                                                            <li class="buttonWrap">
                                                                <a href="javascript:void(0);" class="btnSubmit button">{{Lang::get('const.common.exit')}}</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="addMember">
                                            <button class="jscBtnOpenModal">
                                                <i class="fas fa-user-plus"></i>
                                            </button>
                                            <div for="addMember" class="jscBackgroundLayer backgroundLayer dn"></div>
                                            <div class="jscActionModal actionModal editRoomModal dn">
                                                <form action="">
                                                    <dl class="createRoomConditions">
                                                        <dt>{{Lang::get('const.common.new_room_name')}}</dt>
                                                        <dd>
                                                            <div class="createRoomMember">
                                                                <ul class="createRoomMemberList">
                                                                    <li>名字 名前<i class="fas fa-times"></i></li>
                                                                    <li>名字 名前<i class="fas fa-times"></i></li>
                                                                    <li>名字 名前<i class="fas fa-times"></i></li>
                                                                </ul>
                                                            </div>
                                                            <p class="numberOfSelected">1 名</p>
                                                        </dd>
                                                    </dl>
                                                    <div class="selectAll buttonWrap">
                                                        <a href="javascript:void(0)" class="button">{{Lang::get('const.common.select_all')}}</a>
                                                    </div>
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
                                                        <button class="btnSubmitCreateRoom button">招待</button>
                                                    </div>
                                                </form>
                                            </div><!--END jscActionModal-->
                                        </div><!--END addMember-->
                                        <ul class="actionBtnList">
                                            <li class="jscModalParent startChat buttonWrap">
                                                <button for="startChatRoomId1" class="jscBtnOpenModal btnStartChat button">{{Lang::get('const.common.call')}}</button>
                                                <div for="startChatRoomId1" class="jscBackgroundLayer backgroundLayer dn"></div>
                                                <div class="jscActionModal actionModal dn">
                                                    <p class="descriptionAction">
                                                        ミーティングを開始しますか？
                                                    </p>
                                                    <ul class="actionBtn">
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">{{Lang::get('const.common.cancel')}}</a>
                                                        </li>
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="btnOk button">OK</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="jscModalParent deleteChatRoom buttonWrap">
                                                <button for="deleteRoomId1" class="jscBtnOpenModal btnDeleteChatRoom button">削除</button>
                                                <div for="deleteRoomId1" class="jscBackgroundLayer backgroundLayer dn"></div>
                                                <div class="jscActionModal actionModal dn">
                                                    <p class="descriptionAction">
                                                        一度削除したルームは元に戻せません。<br>
                                                        ルームを削除しますか？
                                                    </p>
                                                    <ul class="actionBtn">
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">キャンセル</a>
                                                        </li>
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="btnDelete button">削除</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="jscModalParent leaveChatRoom buttonWrap">
                                                <label class="jscBtnOpenModal btnLeaveChatRoom button">退出</label>
                                                <label class="jscBackgroundLayer backgroundLayer dn"></label>
                                                <div class="jscActionModal actionModal dn">
                                                    <p class="descriptionAction">
                                                        <span>あなたはこのルームの管理者になっています。<br></span>ルームを退出しますか？
                                                    </p>
                                                    <ul class="actionBtn">
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="jscBtnCancel btnCancel button">キャンセル</a>
                                                        </li>
                                                        <li class="buttonWrap">
                                                            <a href="javascript:void(0);" class="btnSubmit button">退出</a>
                                                        </li>
                                                    </ul>
                                                </div><!--END jscActionModal-->
                                            </li>
                                        </ul><!--actionBtnList-->
                                    </div><!--END roomDetailInner-->
                                </div><!--END jscRoomDetail -->
                            </div><!--END roomDetailWrap buttonWrap-->
                        </li>
                    </ul>
                </dd>

            @endforeach
        </dl>
    </main>
</div>
</body>
</html>
