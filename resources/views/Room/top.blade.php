<div class="wrapper">
    <header class="header">
      <div class="headerInner">
        <div class="createRoom">
          <input type="checkbox" name="createRoom" id="createRoom" class="checkCreateRoom" hidden>
          <label for="createRoom" class="btnCreateRoom">
            <i class="fas fa-plus"></i>
            <span>新規ルーム作成</span>
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
                <div class="roomDetail dn">
                  <label for="roomId1" class="closeRoomDetail">
                    <i class="fas fa-times"></i>
                  </label>
                  <div class="roomImg" style="background-image: $画像path;">
                    <i class="fas fa-images"></i>
                  </div>
                  <div class="editRoomName">
                    <form action="">
                      <input type="text" name="roomName" value="$ルーム名">
                      <i class="fas fa-edit"></i>
                    </form>
                  </div>
                  <div class="addFavoriteRoom">
                    <form action="">
                      <input type="checkbox" name="favoriteRoom" id="addFavoriteRoomId1">
                      <label for="addFavoriteRoomId1" class="btnFavoriteRoom">お気に入り</label>
                      <i class="fas fa-heart dn"></i>
                      <i class="far fa-heart"></i>
                    </form>
                  </div>
                  <ul class="roomMemberList">
                    <li>
                      <i class="fas fa-crown"></i>
                      <p class="joinedRoomMember active">$メンバー名</p>
                      <div class="deleteRoomMember">
                        <input type="checkbox" name="deleteRoomMember" id="leaveMemberRoomId1">
                        <label for="leaveMemberRoomId1" class="btnDeleteRoomMember">退出</label>
                        <label for="leaveMemberRoomId1" class="backgroundLayer dn"></label>
                        <div class="actionModal dn">
                          <p class="descriptionAction">
                            メンバーを退出させますか？
                          </p>
                          <ul class="actionBtn">
                            <li class="btnCancel">
                              <a href="#">キャンセル</a>
                            </li>
                            <li class="btnSubmit">
                              <a href="#">退出</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="addMember">
                    <i class="fas fa-user-plus"></i>
                  </div>
                  <ul class="actionBtnList">
                    <li class="startChat">
                      <input type="checkbox" name="startChat" id="startChatRoomId1">
                      <label for="startChatRoomId1" class="btnStartChat">通話</label>
                      <label for="startChatRoomId1" class="backgroundLayer dn"></label>
                      <div class="actionModal dn">
                        <p class="descriptionAction">
                          ミーティングを開始しますか？
                        </p>
                        <ul class="actionBtn">
                          <li class="btnCancel">
                            <a href="#">キャンセル</a>
                          </li>
                          <li class="btnSubmit">
                            <a href="#">OK</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="deleteChatRoom">
                      <input type="checkbox" name="deleteChatRoom" id="deleteRoomId1">
                      <label for="deleteRoomId1" class="btnDeleteChatRoom">削除</label>
                      <label for="deleteRoomId1" class="backgroundLayer dn"></label>
                        <div class="actionModal dn">
                          <p class="descriptionAction">
                            一度削除したルームは元に戻せません。<br>
                            ルームを削除しますか？
                          </p>
                          <ul class="actionBtn">
                            <li class="btnCancel">
                              <a href="#">キャンセル</a>
                            </li>
                            <li class="btnSubmit">
                              <a href="#">削除</a>
                            </li>
                          </ul>
                        </div>
                    </li>
                    <li class="leaveChatRoom">
                      <input type="checkbox" name="leaveChatRoom" id="leaveRoomId1">
                      <label for="leaveRoomId1" class="btnLeaveChatRoom">退出</label>
                      <label for="leaveRoomId1" class="backgroundLayer dn"></label>
                      <div class="actionModal dn">
                        <p class="descriptionAction">
                          <span>あなたはこのルームの管理者になっています。<br></span>
                          ルームを退出しますか？
                        </p>
                        <ul class="actionBtn">
                          <li class="btnCancel">
                            <a href="#">キャンセル</a>
                          </li>
                          <li class="btnSubmit">
                            <a href="#">退出</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
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
        <dt>作成ルーム</dt>
        <dd></dd>
        <dt>参加ルーム</dt>
        <dd></dd>
      </dl>

    </main>
  </div>
</body>