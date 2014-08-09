(function($, window, document, undefined) {
  var __$win = $(window);

  __entry();

  /**
   * --------------------------------------------------
   * エントリー
   * --------------------------------------------------
   */
  function __entry() {
    var _$accepting,
        _$datetime,
        _$closed,
        _period = new Date('2014/08/31 00:00:00').getTime(),
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

