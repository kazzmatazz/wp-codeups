
jQuery(function ($) {
  // ハンバーガーメニュー
  // 背景がスクロールされないように
  $(".js-hamburger,.js-drawer,.js-drawer a").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-drawer").fadeToggle();
    $("body").toggleClass("active");
  });

  // スワイパー1
  const swiper1 = new Swiper(".js-mv-swiper", {
    effect: "fade",
    speed: 3000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
    },
  });

  // スワイパー2
  const swiper2 = new Swiper(".js-campaign-swiper", {
    loop: true,
    slidesPerView: 'auto',
    spaceBetween: 24,
    grabCursor: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      768: {
        spaceBetween: 40,
      }
    },
  });

  // アニメ出現
  let box = $('.colorbox'),
  speed = 700;
  box.each(function(){
  $(this).append('<div class="color"></div>')
  let color = $(this).find($('.color')),
  image = $(this).find('img');
  let counter = 0;
  image.css('opacity','0');
  color.css('width','0%');
  color.on('inview', function(){
    if(counter == 0){
    $(this).delay(200).animate({'width':'100%'},speed,function(){
          image.css('opacity','1');
          $(this).css({'left':'0' , 'right':'auto'});
          $(this).animate({'width':'0%'},speed);
        })
    counter = 1;
    }
  });
  });

  // ページトップボタン
  const pageTop = $(".page-top");
  // 404ページの場合は以下のスクリプトを実行しない
  if (pageTop.hasClass('page-top--none')) {
    return;
  }
  pageTop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
  });
  pageTop.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
  // フッター手前でストップ
  $(".page-top").hide();
  $(window).on("scroll", function () {
    let scrollHeight = $(document).height();
    let scrollPosition = $(window).height() + $(window).scrollTop();
    let footHeight = $("footer").innerHeight();
    if (scrollHeight - scrollPosition <= footHeight) {
      $(".page-top").css({
        position: "absolute",
        bottom: footHeight,
      });
    } else {
      $(".page-top").css({
        position: "fixed",
        bottom: "0",
      });
    }
  });

  // モーダルの表示
  let scrollPos;
  $(".js-modal").click(function () {
    scrollPos = $(window).scrollTop();
    $(".js-overlay").html($(this).prop("outerHTML"));
    $(".js-overlay").fadeIn(200);
    $('body').addClass('is-fixed');
    return false;
  });

  $(".js-overlay").click(function () {
    $(".js-overlay").fadeOut(200, function () {
      $('body').removeClass('is-fixed');
      $(window).scrollTop(scrollPos);
    });
    return false;
  });

  // タブの切り替え（information）
  $(function () {
    const tabButton = $(".js-tab-menu"),
          tabContent = $(".js-tab-content");

    tabButton.on("click", function () {
        let index = tabButton.index(this);
        activateTab(index);
    });

    function getParameterByName(name, url = window.location.href) {
        name = name.replace(/[\[\]]/g, '\\$&');
        const regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
              results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, ' '));
    }

    function activateTabFromParams() {
        const tab = getParameterByName('tab');
        const index = tabButton.filter(`[data-tab="${tab}"]`).index();
        if (index >= 0) {
            activateTab(index);
        }
    }

    function activateTab(index) {
        tabButton.removeClass("is-active").eq(index).addClass("is-active");
        tabContent.removeClass("is-active").eq(index).addClass("is-active");
    }

    $(window).on('load', activateTabFromParams);
});


  // サイドバーのトグルメニュー
  $('.js-sidebar-archive').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('is-open');
  });

  // アコーディオンメニュー
  $(".js-accordion-title").on("click", function () {
    $(this).toggleClass("is-open");
    $(this).next().slideToggle(300);
  });

  // 問い合わせフォームの入力チェック
  $("#submit").on("click", function () {
    // エラー表示のリセット
    $("#name").removeClass("is-error");
    $("#email").removeClass("is-error");
    $("#tel").removeClass("is-error");
    $("#contents").removeClass("is-error");
    $("#contact-item").removeClass("is-error");

    $("#agree").removeClass("is-error");
    $(".contact-page__error").removeClass("is-error");

    if ($("#name").val() === "") {
      $("#name").addClass("is-error");
      $(".contact-page__error").addClass("is-error");
    }
    if ($("#email").val() === "") {
      $("#email").addClass("is-error");
      $(".contact-page__error").addClass("is-error");
    }
    if ($("#tel").val() === "") {
      $("#tel").addClass("is-error");
      $(".contact-page__error").addClass("is-error");
    }
    if ($("#contents").val() === "") {
      $("#contents").addClass("is-error");
      $(".contact-page__error").addClass("is-error");
    }

    var checkBoxes = $("input[name='checkbox-279[]']");
    var isChecked = false;

    checkBoxes.each(function () {
      if ($(this).prop("checked")) {
        isChecked = true;
        return false;
      }
    });

    if (!isChecked) {
      $("#contact-item").addClass("is-error");
      $(".contact-page__error").addClass("is-error");
    }

    var checkAgree = $("input[name='checkbox-27[]']");
    var isCheckedAgree = false;

    checkAgree.each(function () {
      if ($(this).prop("checked")) {
        isCheckedAgree = true;
        return false;
      }
    });

    if (!isCheckedAgree) {
      $("#agree").addClass("is-error");
      $(".contact-page__error").addClass("is-error");
    }

    if (
      $("#name").val() !== "" &&
      $("#email").val() !== "" &&
      $("#tel").val() !== "" &&
      $("#contents").val() !== "" &&
      isChecked &&
      $("#agree").prop("checked")
    ) {
      // window.location.href = "../page-thanks.html";
    }
  });
});