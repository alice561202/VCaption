<!DOCTYPE html>
<html lang="ja">
@include('head')
<body>
<div class="wrapper">
    @include('header')
    <main>
        <div class="chatRoomWrap" id="app">
            <ul class="chatRoom">
                <li><video ref="video-here" autoplay></video></li>
                <li><video ref="video-there" autoplay></video></li>
            </ul>
            <script src='/js/app.js'></script>
            <script>
                new Vue({
                    el: '#app',
                    data: {
                        pusher: {
                            key: '{{ config('broadcasting.connections.pusher.key') }}',
                            cluster: '{{ config('broadcasting.connections.pusher.options.cluster') }}'
                        },
                        {{--user: {!! $user !!},--}}
                        {{--others: {!! $others !!},--}}
                        channel: null,
                        stream: null,
                        peers: {}
                    },
                    methods: {
                        startVideoChat(userId) {

                            this.getPeer(userId, true);

                        },
                        getPeer(userId, initiator) {

                            if(this.peers[userId] === undefined) {

                                let peer = new Peer({
                                    initiator,
                                    stream: this.stream,
                                    trickle: false
                                });
                                peer.on('signal', (data) => {

                                    this.channel.trigger('client-signal-'+ userId, {
                                        userId: this.user.id,
                                        data: data
                                    });

                                })
                                    .on('stream', (stream) => {

                                        const videoThere = this.$refs['video-there'];
                                        videoThere.srcObject = stream;

                                    })
                                    .on('close', () => {

                                        const peer = this.peers[userId];

                                        if(peer !== undefined) {

                                            peer.destroy();

                                        }

                                        delete this.peers[userId];
                                    });

                                this.peers[userId] = peer;

                            }

                            return this.peers[userId];

                        }
                    },
                    mounted() {

                        // エラー表示できます。
                        // Pusher.logToConsole = true;

                        // カメラ、音声にアクセス
                        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
                            .then((stream) => {

                                const videoHere = this.$refs['video-here'];
                                videoHere.srcObject = stream;
                                this.stream = stream;

                                // Pusher の準備
                                const pusher = new Pusher(this.pusher.key, {
                                    authEndpoint: '/auth/video_chat',
                                    cluster: this.pusher.cluster,
                                    auth: {
                                        headers: {
                                            'X-CSRF-Token': document.head.querySelector('meta[name="csrf-token"]').content
                                        }
                                    }
                                });
                                this.channel = pusher.subscribe('presence-video-chat');
                                this.channel.bind('client-signal-'+ this.user.id, (signal) => {

                                    const userId = signal.userId;
                                    const peer = this.getPeer(userId, false);
                                    peer.signal(signal.data);

                                });

                            });

                    }
                });

            </script>
            <ul class="chatActionBtn">
                <li>
                    <a class="jscBtnOpenModal" href="javascript:void(0)">
                        <i class="fas fa-video"></i>
                    </a>
                </li>
                <li>
                    <a class="jscBtnOpenModal" href="javascript:void(0)">
                        <i class="fas fa-microphone"></i>
                    </a>
                </li>
                <li>
                    <a class="jscBtnOpenModal" href="javascript:void(0)">
                        <i class="fas fa-users"></i>
                    </a>
                    <div class="jscActionModal actionModal memberModal detail dn">
                        <p class="modalTtl">参加者一覧</p>
                        <ul class="chatRoomMemberList">
                            <li>
                                <i class="fas fa-crown icnCrown"></i>
                                <p class="joinedRoomMember active">$メンバー名</p>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                            </li>
                        </ul>
                        <div class="submitCreateRoom buttonWrap">
                            <button class="btnSubmitCreateRoom button">閉じる</button>
                        </div>
                    </div>
                    <div class="jscActionModal actionModal memberModal detail dn">
                        <p class="modalTtl">参加者管理</p>
                        <ul class="chatRoomMemberList">
                            <li>
                                <i class="fas fa-crown icnCrown"></i>
                                <p class="joinedRoomMember active">$メンバー名</p>
                                <i class="fas fa-microphone muteOnOff"></i>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                                <i class="fas fa-microphone muteOnOff"></i>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                                <i class="fas fa-microphone muteOnOff"></i>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                                <i class="fas fa-microphone muteOnOff"></i>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                                <i class="fas fa-microphone muteOnOff"></i>
                            </li>
                            <li>
                                <p class="joinedRoomMember active">$メンバー名</p>
                                <i class="fas fa-microphone muteOnOff"></i>
                            </li>
                        </ul>
                        <ul class="actionBtn micBtnList">
                            <li class="buttonWrap">
                                <a href="javascript:void(0);" class="button muteMic">全マイクOFF</a>
                            </li>
                            <li class="buttonWrap">
                                <a href="javascript:void(0);" class="button muteMic">全マイクON</a>
                            </li>
                        </ul>
                        <div class="submitCreateRoom buttonWrap">
                            <button class="btnSubmitCreateRoom button">閉じる</button>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="jscBtnOpenModal" href="javascript:void(0)">
                        <i class="fas fa-user-plus"></i>
                    </a>
                    <div class="jscBackgroundLayer backgroundLayer dn"></div>
                    <div class="jscActionModal actionModal editRoomModal detail dn">
                        <form action="">
                            <dl class="createRoomConditions">
                                <dt>招待メンバー</dt>
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
                                <a href="javascript:void(0)" class="button">全選択</a>
                            </div>
                            <ul class="selectMemberList">
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId1" class="selectMemberCheck">
                                    <label for="userId1" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId2" class="selectMemberCheck">
                                    <label for="userId2" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId3" class="selectMemberCheck">
                                    <label for="userId3" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId4" class="selectMemberCheck">
                                    <label for="userId4" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId5" class="selectMemberCheck">
                                    <label for="userId5" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId6" class="selectMemberCheck">
                                    <label for="userId6" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId7" class="selectMemberCheck">
                                    <label for="userId7" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId8" class="selectMemberCheck">
                                    <label for="userId8" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId9" class="selectMemberCheck">
                                    <label for="userId9" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId10" class="selectMemberCheck">
                                    <label for="userId10" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId11" class="selectMemberCheck">
                                    <label for="userId11" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId12" class="selectMemberCheck">
                                    <label for="userId12" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId13" class="selectMemberCheck">
                                    <label for="userId13" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId14" class="selectMemberCheck">
                                    <label for="userId14" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId15" class="selectMemberCheck">
                                    <label for="userId15" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId16" class="selectMemberCheck">
                                    <label for="userId16" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId17" class="selectMemberCheck">
                                    <label for="userId17" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId18" class="selectMemberCheck">
                                    <label for="userId18" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId19" class="selectMemberCheck">
                                    <label for="userId19" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId20" class="selectMemberCheck">
                                    <label for="userId20" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId21" class="selectMemberCheck">
                                    <label for="userId21" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId22" class="selectMemberCheck">
                                    <label for="userId22" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId23" class="selectMemberCheck">
                                    <label for="userId23" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId24" class="selectMemberCheck">
                                    <label for="userId24" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId25" class="selectMemberCheck">
                                    <label for="userId25" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId26" class="selectMemberCheck">
                                    <label for="userId26" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId27" class="selectMemberCheck">
                                    <label for="userId27" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId28" class="selectMemberCheck">
                                    <label for="userId28" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId29" class="selectMemberCheck">
                                    <label for="userId29" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId30" class="selectMemberCheck">
                                    <label for="userId30" class="selectMember">名字 名前</label>
                                </li>
                                <li>
                                    <input type="checkbox" name="selectMember" id="userId31" class="selectMemberCheck">
                                    <label for="userId31" class="selectMember">名字 名前</label>
                                </li>
                            </ul>
                            <div class="submitCreateRoom buttonWrap">
                                <button class="btnSubmitCreateRoom button">招待</button>
                            </div>
                        </form>
                    </div>
                </li>
                <li>
                    <a class="jscBtnOpenModal" href="javascript:void(0)">
                        <i class="fas fa-times"></i>
                    </a>
                    <div class="actionModal modal-syncer modal-content dn">
                        <p class="descriptionAction">ルームから退出しますか？</p>
                        <ul class="actionBtn">
                            <li class="btnCancel buttonWrap">
                                <a href="javascript:void(0);" class="jscBtnCancel button">キャンセル</a>
                            </li>
                            <li class="btnSubmit buttonWrap">
                                <a href="javascript:void(0);" class="button">退出</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="chatAndCaptionBox">
            @include('chat_command')

            <div class="caption chatAndCaption">
                <h4 class="subttl">字幕</h4>
                <ul class="memberTalk">
                    <li>
                        <div class="memberInfo">
                            <img class="memberImg" src="/images/room_img_1.jpg" alt="">
                            <p class="memberName">有馬哲平</p>
                        </div>
                        <p class="memberTalkMessage">字幕</p>
                    </li>
                    <li>
                        <div class="memberInfo">
                            <img class="memberImg" src="/images/room_img_1.jpg" alt="">
                            <p class="memberName">有馬哲平</p>
                        </div>
                        <p class="memberTalkMessage">字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕</p>
                    </li>
                    <li class="own">
                        <div class="memberInfo">
                            <img class="memberImg" src="/images/room_img_1.jpg" alt="">
                            <p class="memberName">有馬哲平</p>
                        </div>
                        <p class="memberTalkMessage">字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕字幕</p>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</div>
</body>
</html>
