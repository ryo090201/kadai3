// 開閉ボタンをクリックすると発火
$("#sp_menuBtn").click(function() {
    // ラップ要素にactiveというクラスを付与する。
    $(".header_content").toggleClass("active");
    $("#sp_menuBtn").toggleClass("active");
  });
  
  $(".menu_link").click(function() {
    // ラップ要素にactiveというクラスを付与する。
    $(".header_content").toggleClass("active");
    $("#sp_menuBtn").toggleClass("active");
  });

  // idの着脱
  $('.left').click(
    function () {
      $(this).attr('id', 'left');
      $('.center').removeAttr('id');
      $('.right').removeAttr('id');
    }
  );
  
  $('.center').click(
    function () {
      $(this).attr('id', 'center');
      $('.left').removeAttr('id');
      $('.right').removeAttr('id');
    }
  );
  
    $('.right').click(
      function () {
        $(this).attr('id', 'right');
        $('.center').removeAttr('id');
        $('.left').removeAttr('id');
      }
    );