// slickのサイトからSingleItemのコードをコピーし、
// 次へ前へボタンを非表示、ドットあり、自動再生あり、自動再生のスピードを2000にする

// 「HTMLが読み込まれた段階で処理を始める」ことを命令する記述です。
jQuery(function ($) {
   $('.js-accordion-title').on('click', function () {
      /*クリックでコンテンツを開閉*/
      $(this).next().slideToggle(200);
      /*矢印の向きを変更*/
      $(this).toggleClass('open', 200);
   });

});
