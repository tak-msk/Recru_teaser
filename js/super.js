(function($, window, document, undefined) {
  var __$win = $(window);

  __sharing();
  __about();
  __entry();



  /**
   * --------------------------------------------------
   * シェア
   * --------------------------------------------------
   */
  function __sharing() {
    _init();



    /* ----------------------------------------
     * 初期化
     * ---------------------------------------- */

    function _init() {
      var $body,
          $sharing,
          $fbRoot = $('<div id="fb-root"></div>'),
          $shareItems = $([
            '<li class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.bellpark.co.jp/bprecruit/internship/" data-text="【店舗創造型インターンシップ】企画力、50万円で買います！！ #internship #business" data-lang="ja" data-count="vertical">ツイート</a></li>',
            '<li class="facebook"><div class="fb-like" data-href="http://www.bellpark.co.jp/bprecruit/internship/" data-width="69" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div></li>'
          ].join('\n'));

      $(function() {
        if (document.getElementById('hero') === null) {
          return;
        }

        $body = $('body');
        $sharing = $('#hero .sharing');

        $body.append($fbRoot);
        $sharing.append($shareItems);

        __$win
          .on({
            load: function() {
              _setSocialPlugin();
            }
          });
      });
    }



    /* ----------------------------------------
     * ソーシャルプラグインを設定
     * ---------------------------------------- */

    function _setSocialPlugin() {
      _setTwitterWidgets();
      _setFacebookSDK();
    }



    /* ----------------------------------------
     * Twitterのウィジェットを設定
     * ---------------------------------------- */

    function _setTwitterWidgets() {
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
    }



    /* ----------------------------------------
     * FacebookのSDKを設定
     * ---------------------------------------- */

    function _setFacebookSDK() {
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    }
  }



  /**
   * --------------------------------------------------
   * 概要
   * --------------------------------------------------
   */
  function __about() {
    var _$listItems,
        _$contents,
        _$containers;

    _init();



    /* ----------------------------------------
     * 初期化
     * ---------------------------------------- */

    function _init() {
      var $triggers;

      $(function() {
        if (document.getElementById('about') === null) {
          return;
        }

        _$listItems = $('#about > section');
        $triggers = _$listItems.children('h3');
        _$contents = _$listItems.children('.content');
        _$containers = _$contents.children('.container');

        $triggers
          .each(function(index) {
            var $trigger = $(this);

            $trigger
              .on({
                mouseenter: function() {
                  _focusTrigger($trigger);
                },
                mouseleave: function() {
                  _blurTrigger($trigger);
                },
                click: function() {
                  _toggleContent(index);
                }
              });
          });
        _$containers
          .css({
            opacity: 0
          });
      });
    }



    /* ----------------------------------------
     * トリガーをフォーカス
     * ---------------------------------------- */

    function _focusTrigger($trigger) {
      if ($.ua.isLtIE9 === true) {
        return;
      }

      $trigger
        .velocity({
          opacity: 0.6
        }, {
          duration: 125,
          easing: 'linear'
        });
    }



    /* ----------------------------------------
     * トリガーをブラー
     * ---------------------------------------- */

    function _blurTrigger($trigger) {
      if ($.ua.isLtIE9 === true) {
        return;
      }

      $trigger
        .velocity({
          opacity: 1
        }, {
          duration: 125,
          easing: 'linear'
        });
    }



    /* ----------------------------------------
     * コンテンツをトグル
     * ---------------------------------------- */

    function _toggleContent(index) {
      var $listItem = _$listItems.eq(index),
          isExpanded = $listItem.data('expanded');

      if(isExpanded === true) {
        _collapseContent(index);
      } else {
        _expandContent(index);
      }
    }



    /* ----------------------------------------
     * コンテンツを閉じる
     * ---------------------------------------- */

    function _collapseContent(index) {
      var $listItem = _$listItems.eq(index),
          $content = _$contents.eq(index),
          $container = _$containers.eq(index);

      $listItem
        .data({
          expanded: false
        })
        .removeClass('expanded');
      $content
        .velocity({
          height: 0
        }, {
          duration: 250,
          easing: 'easeOutCubic'
        });
      $container
        .velocity({
          opacity: 0
        }, {
          duration: 250,
          easing: 'linear'
        });
    }



    /* ----------------------------------------
     * コンテンツを開く
     * ---------------------------------------- */

    function _expandContent(index) {
      var $listItem = _$listItems.eq(index),
          $content = _$contents.eq(index),
          $container = _$containers.eq(index),
          containerOuterHeight = $container.outerHeight();

      $listItem
        .data({
          expanded: true
        })
        .addClass('expanded');
      $content
        .velocity({
          height: containerOuterHeight
        }, {
          duration: 250,
          easing: 'easeOutCubic'
        });
      $container
        .velocity({
          opacity: 1
        }, {
          duration: 250,
          easing: 'linear'
        });
    }
  }



  /**
   * --------------------------------------------------
   * エントリー
   * --------------------------------------------------
   */
  function __entry() {
    var _$accepting,
        _$datetime,
        _$closed,
        _period = new Date('2014/08/11 00:00:00').getTime(),
        _countdownTimer = null;

    _init();



    /* ----------------------------------------
     * 初期化
     * ---------------------------------------- */

    function _init() {
      var $entry,
          now;

      $(function() {
        if (document.getElementById('entry') === null) {
          return;
        }

        $entry = $('#entry');
        _$accepting = $entry.children('.accepting');
        _$closed = $entry.children('.closed');
        now = new Date().getTime();

        if (now >= _period) {
          _showClosed();
        } else {
          _showAccepting();
        }
      });
    }



    /* ----------------------------------------
     * 締切後のコンテンツを表示
     * ---------------------------------------- */

    function _showClosed() {
      _$closed
        .css({
          display: 'block'
        });
    }



    /* ----------------------------------------
     * 受付中のコンテンツを表示
     * ---------------------------------------- */

    function _showAccepting() {
      _$datetime = _$accepting.find('.datetime');

      _$accepting
        .css({
          display: 'block'
        });

      _countdown();
    }



    /* ----------------------------------------
     * カウントダウン
     * ---------------------------------------- */

    function _countdown() {
      var sec = 1000,
          min = sec * 60,
          hour = min * 60,
          day = hour * 24,
          now = new Date().getTime(),
          remaining,
          remainingDay,
          remainingHour,
          remainingMin,
          remainingSec,
          remainingText = '';

      if (now >= _period) {
        clearTimeout(_countdownTimer);

        _countdownTimer = null;

        return;
      }

      remaining = _period - now;
      remainingDay = Math.floor(remaining / day);
      remainingHour = Math.floor(remaining % day / hour);
      remainingMin = Math.floor(remaining % day % hour / min);
      remainingSec = Math.floor(remaining % day % hour % min / sec);

      if (remainingDay > 1) {
        remainingText = remainingDay + 'days ';
      }
      else if (remainingDay === 1) {
        remainingText = remainingDay + 'day ';
      }

      remainingText
        = remainingText
        + _setZeroPadding(remainingHour) + 'h'
        + _setZeroPadding(remainingMin) + 'm'
        + _setZeroPadding(remainingSec) + 's';

      _$datetime.html(remainingText);

      _countdownTimer = setTimeout(function() {
        _countdown();
      }, 1000);
    }



    /* ----------------------------------------
     * ゼロパディングを設定
     * ---------------------------------------- */

    function _setZeroPadding(num) {
      if (num === 0) {
        num = '00';
      }
      else if (num < 10) {
        num = '0' + num;
      }

      return num;
    }
  }
})(jQuery, window, document);

