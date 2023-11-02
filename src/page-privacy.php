<?php
get_template_part("./parts/global-header"); ?>

<div class="privacy">
  <div class="privacy__bg">
    <div class="container">
      <?php get_template_part("./parts/heading-page", null, [
          "title" => "PRIVACY POLICY",
      ]); ?>
      <div class="privacy__inner">
        <p class="privacy__text">
          （以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。
        </p>
        <div class="privacy__wrapper">
          <div class="privacy__contents">
            <h2 class="privacy__contents__title">第1条（個人情報）</h2>
            <p class="privacy__contents__text">「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
          </div>
          <div class="privacy__contents">
            <h2 class="privacy__contents__title">第2条（個人情報の収集方法）</h2>
            <p class="privacy__contents__text">当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。</p>
          </div>
          <div class="privacy__contents">
            <h2 class="privacy__contents__title">第3条（個人情報を収集・利用する目的）</h2>
            <p class="privacy__contents__text">当社が個人情報を収集・利用する目的は，以下のとおりです。</p>
            <ul>
              <li>当社サービスの提供・運営のため</li>
              <li>ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</li>
              <li>ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part("./parts/global-footer");
?>
