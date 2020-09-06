<div class="wrapper">
    <header class="header">
        <div class="headerInner">
            <div class="createRoom">
                <input type="checkbox" name="createRoom" id="createRoom" class="checkCreateRoom" hidden>
                <label for="createRoom" class="btnCreateRoom">
                    <i class="fas fa-plus"></i>
                    <span>
                        新規ルーム作成
                    </span>
                </label>
                <label for="createRoom" class="createRoomModal backgroundLayer dn"></label>
                <div class="createRoomModalInner actionModal dn">
                    <form action="">
                        <dl class="createRoomConditions">
                            <dt>新規ルーム名</dt>
                            <dd>
                                <input type="text" name="createRoomName" class="createRoomName">
                            </dd>
                            <dt>招待メンバー</dt>
                            <dd>
                                <div class="createRoomMember">
                                    <ul class="createRoomMemberList">
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                        <li>名字 名前<i class="fas fa-times"></i></li>
                                    </ul>
                                </div>
                                <p class="numberOfSelected">1 名</p>
                            </dd>
                        </dl>
                        <div class="selectAll">
                            <a href="javascript:void(0)">全選択</a>
                        </div>
                        <ul class="selectMemberList">
                            <li>
                                <input type="checkbox" name="selectMember" id="userId">
                                <label for="userId" class="selectMember">名字 名前</label>
                            </li>
                        </ul>
                        <input type="submit" value="ルーム作成">
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
    <main class="mainContentWrap">
        <dl class="roomCategory">
            <dt>お気に入り</dt>
            <dd>
                <ul class="roomList">
                    <li>
                        <p class="roomImg active" style="background-image: url('/images/room_img_1.jpg');">
                            <span class="roomName">$ルーム名</span>
                            <i class="fas fa-heart favoriteIcon dn"></i>
                            <i class="far fa-heart favoriteIcon"></i>
                        </p>
                        <div class="roomDetailWrap">
                            <input type="radio" name="roomDetail" class="showRoomDetail" id="roomId1" hidden>
                            <label for="roomId1" class="btnShowRoomDetail">詳細を見る</label>
                        </div>
                    </li>
                </ul>
            </dd>

        </dl>

    </main>
</div>
</body>
