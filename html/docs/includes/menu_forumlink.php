                <?php include $_SERVER['DOCUMENT_ROOT'].'/donate_link.php'; ?>
             
                <style>
                .vticker{
	                border: 1px solid rgba(128, 128, 128, 0.51);
                    border-radius: 15px;
	                width: 256px;
                    margin:6px;
                    margin-top:48px;
                    margin-bottom:16px;
                    background-color:white;
                    text-align:left;
                }
                .vticker ul{
	                padding: 0;
                    padding-bottom:10px;
                }
                .vticker li{
	                list-style: none;
	                border-bottom: 1px solid gray;
	                padding: 10px;
                    width:250px
                    height:80px;
                }
                .et-run{
	                background: red;
                }
                </style>

		<?php /*
                <section style="padding-left:0;padding-right:0">    
                    <h2 style="padding-left:30px">Lastest Topics</h2>

                    <?php $_SERVER['is_cli'] = true; ?>
                    <?php include $_SERVER['DOCUMENT_ROOT'].'/forum/SSI.php'; ?>
                    <div class="vticker-wrapper" align="center">
                        <div class="vticker">
	                        <ul>
                                <?php
                                $topics = ssi_recentTopics(10, null, null, 'array');
	                            foreach ($topics as $topic)
		                            echo '<li style="height:70px;font-size:11pt;line-height:13pt;"><a style="color:black" href="', $topic['href'], '">', 
                                            '<div style="height:18px;color:green;width:240px;overflow:hidden;text-overflow:ellipsis;white-space: nowrap;">', substr($topic['subject'], 0, 100), '</div>',
                                            '<div style="height:36px;width:240px;overflow:hidden;text-overflow:ellipsis">', substr(strip_tags($topic['preview']), 0, 200), '</div>',
                                            '<div style="color:gray">', $topic['time'], '</div>',
                                        '</a></li>';
	                            unset($topics);
                                ?>
	                        </ul>
                        </div>
                    </div>

                    <!--button class="up">UP</button>
                    <button class="down">DOWN</button>
                    <button class="toggle">TOGGLE</button-->

                    <div align="center"><a href="/forum" class="button-big" style="color:white;font-size:14pt">User's Forum</a></div>

                </section>
            
                <script type="text/javascript">
                    $(document).ready(function () {

                        var dd = $('.vticker').easyTicker({
                            direction: 'up',
                            easing: 'easeInOutBack',
                            speed: 'slow',
                            interval: 3000,
                            height: 'auto',
                            visible: 3,
                            mousePause: 1
                        }).data('easyTicker');

                    });
                </script>    
                */ ?>

