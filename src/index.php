<?php
get_template_part("./parts/global-header"); ?>

<div class="index">
  <div class="index__bg">
    <div class="container">
      <h1 class="index__logo">
        <?= get_svg_sprite("logo", "LIG") ?>
      </h1>
      <div class="index__thumbnail">
        <?php get_template_part("./parts/picture", null, [
            "images" => [
                "src" => "sample-01.jpg",
                "width" => "1280",
                "height" => "600",
                "alt" => "",
            ],
        ]); ?>
      </div>
      <ul class="index__anchor__list">
        <li class="index__anchor__item"><a href="#two-column-one" class="js-anchor-link">・2カラムの1番目</a></li>
        <li class="index__anchor__item"><a href="#two-column-two" class="js-anchor-link">・2カラムの2番目</a></li>
        <li class="index__anchor__item"><a href="#top" class="js-anchor-link">・ページトップ</a></li>
      </ul>
      <div id="two-column-one" class="index__column">
        <div class="index__column__img">
          <?php get_template_part("./parts/picture", null, [
              "images" => [
                  "src" => "sample-02.jpg",
                  "width" => "600",
                  "height" => "400",
                  "alt" => "",
              ],
          ]); ?>
        </div>
        <p class="index__column__text">どっちは事実同時にこの約束方に対して事のためをあるたう。どうしても今が命令目は無論この前後ますありなりがするていたからはお話間違っでまして、しばらくには云っんたでた。客をただすんのはひとまず事実でしかるにたないだろ。もっと木下さんで融通中学始終修養にしで世の中この顔何か附随にというお意見たんたなくが、その結果ぞ私か国民師範に述べると、大森さんの事をご免の私をまずご注意と払って私先輩をご安心を亡びるようによほどご意味がいううだば、まるでもし膨脹へおりならで得るだ旨であるですござい。</p>
      </div>
      <div id="two-column-two" class="index__column index__column--reverse">
        <div class="index__column__img">
        <?php get_template_part("./parts/picture", null, [
            "images" => [
                "src" => "sample-02.jpg",
                "width" => "600",
                "height" => "400",
                "alt" => "",
            ],
        ]); ?>
        </div>
        <p class="index__column__text">どっちは事実同時にこの約束方に対して事のためをあるたう。どうしても今が命令目は無論この前後ますありなりがするていたからはお話間違っでまして、しばらくには云っんたでた。客をただすんのはひとまず事実でしかるにたないだろ。もっと木下さんで融通中学始終修養にしで世の中この顔何か附随にというお意見たんたなくが、その結果ぞ私か国民師範に述べると、大森さんの事をご免の私をまずご注意と払って私先輩をご安心を亡びるようによほどご意味がいううだば、まるでもし膨脹へおりならで得るだ旨であるですござい。</p>
      </div>
      <div class="index__accordion">
        <dl class="index__accordion__dl">
          <dt class="index__accordion__dt js-accordion-btn"><button>アコーディオン1</button></dt>
          <dd class="index__accordion__dd js-accordion-contents">アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身アコーディオン1の中身</dd>
        </dl>
        <dl class="index__accordion__dl">
          <dt class="index__accordion__dt js-accordion-btn"><button>アコーディオン2</button></dt>
          <dd class="index__accordion__dd js-accordion-contents">アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身アコーディオン2の中身</dd>
        </dl>
        <dl class="index__accordion__dl">
          <dt class="index__accordion__dt js-accordion-btn"><button>アコーディオン3</button></dt>
          <dd class="index__accordion__dd js-accordion-contents">アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身アコーディオン3の中身</dd>
        </dl>
      </div>
      <div class="index__tab">
        <ul class="index__tab__list">
          <li class="index__tab__item js-tab-btn" data-tab="contents01"><button>タブ1</button></li>
          <li class="index__tab__item js-tab-btn" data-tab="contents02"><button>タブ2</button></li>
          <li class="index__tab__item js-tab-btn" data-tab="contents03"><button>タブ3</button></li>
        </ul>
        <ul>
          <li id="contents01" class="index__tab__contents js-tab-contents">タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身タブ1の中身</li>
          <li id="contents02" class="index__tab__contents js-tab-contents">タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身タブ2の中身</li>
          <li id="contents03" class="index__tab__contents js-tab-contents">タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身タブ3の中身</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_template_part("./parts/global-footer");
?>
