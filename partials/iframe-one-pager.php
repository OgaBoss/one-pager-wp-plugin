<?php
function i_frame_one_pager() {
?>
    <section>
        <div class="tabs tabs-style-flip">
            <nav>
                <ul>
                    <li><a href="#section-flip-1"><span><i class="far fa-comment-alt"></i> SMS</span></a></li>
                    <li><a href="#section-flip-4"><span><i class="fas fa-mobile"></i> Data</span></a></li>
                    <li><a href="#section-flip-2"><span><i class="far fa-credit-card"></i> Bill</span></a></li>
                    <li><a href="#section-flip-3"><span><i class="fas fa-share-square"></i> Transfer</span></a></li>
                    <li><a href="#section-flip-5"><span><i class="fas fa-cogs"></i> Settings</span></a></li>
                </ul>
            </nav>
            <div class="content-wrap">
                <section id="section-flip-1">
                    <iframe src="http://login.betasms.com.ng/ordersms/?site=7e22ec46-93f1-11e8-9354-beee55e65685" height="800" width="400"></iframe>
                </section>
                <section id="section-flip-2"><p>coming soon</p></section>
                <section id="section-flip-3"><p>coming soon</p></section>
                <section id="section-flip-4"><p>coming soon</p></section>
                <section id="section-flip-5"><p>coming soon</p></section>
            </div><!-- /content -->
        </div><!-- /tabs -->
    </section>
    <script>
        (function() {

            [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
                new CBPFWTabs( el );
            });

        })();
    </script>
    <?php
}

add_shortcode('one-pager', 'i_frame_one_pager');
?>
