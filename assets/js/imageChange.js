// クリックすると写真を入れ替える

jQuery(function ($) {
  // 以下に記述

  // page-donationのアニメーション
  $(window).scroll(function () {
    const scrollTop = $(window).scrollTop();
    const windowHeight = $(window).height();
    const windowWidth = $(window).width();
    const lgBreakpoint = 960;
    if (windowWidth > lgBreakpoint) {
      //tablet以上の大きさの挙動
      $(".js-fadeUp").each(function () {
        const targetElement = $(this).offset().top;
        if (scrollTop > targetElement - windowHeight + 230) {
          $(this).css("opacity", "1");
          $(this).css("transform", "translateY(0)");
        }
      });
    } else {
      //sp以下の大きさの挙動
      $(".js-fadeUp").each(function () {
        const targetElement = $(this).offset().top;
        if (scrollTop > targetElement - windowHeight + 130) {
          $(this).css("opacity", "1");
          $(this).css("transform", "translateY(0)");
        }
      });
    }
  });

  // page-newsのタブ
  const $tabs = $(".tabWrap .tabs");
  const $tab = $tabs.find(".tab");
  const $tabPanel = $(".tabPanel");

  $tab.click(function () {
    //アクティブタブのインデックス番号を取得
    const $tabIndex = $tab.index(this);
    //アクティブタブのインデックス番号をパネルに紐づけ
    const $activeTab = $tabPanel.eq($tabIndex);
    //タブの処理
    $tab.removeClass("active"),
      $(this).addClass("active"),
      //パネルの処理
      $tabPanel.removeClass("active"),
      $activeTab.addClass("active");
  });
});
