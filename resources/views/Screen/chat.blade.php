<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>チャットルーム / Vcaption</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="wrapper">
    <main>
        <div class="chatRoomBox">
            <ul class="chatRoom">
                <li class="chatMember">映像</li>
                <li class="chatMember">映像</li>
                <li class="chatMember">映像</li>
                <li class="chatMember">映像</li>
            </ul>
            <div class="chatAndCaptionBox">
                <div class="chat">
                    <p>チャット</p>
                    <div class="chatBox">
                        <div class="memberTalk">
                            <div class="memberInfo">
                                <img src="./images/room_img_1.jpg" alt="">
                                <p>有馬哲平</p>
                            </div>
                            <div class="memberTalkMessage">チャットメッセージ</div>
                        </div>
                    </div>
                    <div class="regTxt">
                        <input type="text" class="txt">
                        <input type="submit" value="送信">
                    </div>
                </div>
                <div class="caption">
                    <p>字幕</p>
                    <div class="memberTalk">
                        <div class="memberInfo">
                            <img src="./images/room_img_1.jpg" alt="">
                            <p>有馬哲平</p>
                        </div>
                        <div class="memberTalkMessage">チャットメッセージ</div>
                    </div>
                    <div class="memberTalk">
                        <div class="memberInfo">
                            <img src="./images/room_img_1.jpg" alt="">
                            <p>有馬哲平</p>
                        </div>
                        <div class="memberTalkMessage">チャットメッセージチャットメッセージ</div>
                    </div>
                </div>
            </div>
            <div class="buttonList">
                <ul>
                    <li><i class="fas fa-video"></i>カメラ</li>
                    <li><i class="fas fa-microphone">マイク</i></li>
                    <li><i class="fas fa-comment-dots">チャット</i></li>
                    <li><i class="fas fa-thumbs-up">絵文字</i></li>
                    <li class="modalClassSyncer shareScreen" onclick="openModal('shareScreen');">画面共有</li>
                    <li class="modalClassSyncer memberList" onclick="openModal('memberList');"><i class="fas fa-users"></i>メンバー</li>
                    <li class="modalClassSyncer invite" onclick="openModal('invite');"><i class="fas fa-user-plus">メンバー追加</i></li>
                    <li class="modalClassSyncer exit" onclick="openModal('exit');"><i class="fas fa-times">退出</i></li>
                </ul>
            </div>
        </div>
        <div>
            <div class="detail modal-syncer modal-content" data-target="shareScreen" id="shareScreen" style="display: none;">
                <p>画面共有を開始します。</p>
                <button>キャンセル</button>
                <button>OK</button>
            </div>
            <div class="detail modal-syncer modal-content" data-target="memberList" id="memberList" style="display: none;">
                <p>参加者一覧</p>
            </div>
            <div class="" style="display: none;">
                <p>参加者管理</p>
            </div>
            <div class="detail modal-syncer modal-content" data-target="invite" id="invite" style="display: none;">
                <p>参加者招待</p>
            </div>
            <div class="detail modal-syncer modal-content" data-target="exit" id="exit" style="display: none;">
                <p>ルームから退出しますか？</p>
                <button>キャンセル</button>
                <button>OK</button>
            </div>
        </div>
    </main>
</div>
</body>
</html>
