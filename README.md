# 至誠テクノロジーズ　ホームページ

## セットアップ

### 1. 必要なツール
- Docker
- Docker Compose

### 2. ローカル環境の起動
以下のコマンドを実行して、Docker Compose で WordPress 環境を立ち上げます。

```sh
docker-compose up -d
```

これにより、WordPress のコンテナがバックグラウンドで起動します。

### 3. 環境の停止

環境を停止するには、以下のコマンドを実行してください。

```sh
docker-compose down
```

## ディレクトリ構成

```
/
├── prototype/   # 静的コーディングのファイル (HTML/CSS/JS)
├── wp-content/  # WordPress のテーマ・プラグイン・アップロードファイル
│   ├── themes/
│   │   ├── my-theme/  # カスタムテーマ
│   ├── plugins/
│   ├── uploads/
├── docker-compose.yml  # Docker Compose 設定ファイル
├── .gitignore  # Git の無視設定ファイル
├── README.md  # このファイル
```

## 注意事項
- `prototype/` は静的コーディング用のファイル群であり、WordPress とは直接関係ありません。
- `wp-content/` は `.gitignore` により基本的に Git 管理対象外ですが、`wp-content/themes/my-theme/` は例外として Git 管理されています。

## Contact Form 7 の設定

この WordPress サイトでは、`Contact Form 7` を使用してお問い合わせフォームを実装しています。

### フォームの構成
以下の設定でフォームを作成してください。（WordPress 管理画面 → 「お問い合わせ」→「新規追加」）

```
<label class="form-label">企業名</label>
[text company class:form-control placeholder "企業名を入力してください"]

<label class="form-label">氏名 <span class="required">必須</span></label>
[text* your-name class:form-control placeholder "氏名を入力してください"]

<label class="form-label">メールアドレス <span class="required">必須</span></label>
[email* your-email class:form-control placeholder "メールアドレスを入力してください"]

<label class="form-label">電話番号</label>
[tel phone class:form-control placeholder "電話番号を入力してください"]

<label class="form-label">件名 <span class="required">必須</span></label>
[text* your-subject class:form-control placeholder "件名を入力してください"]

<label class="form-label">お問い合わせ内容 <span class="required">必須</span></label>
[textarea* your-message class:form-control rows:15 placeholder "お問い合わせ内容を入力してください"]

<div class="mt-5 text-center">
    [submit class:d-md-block class:m-md-auto class:w-50 class:btn class:linkbutton "お問い合わせを送信する"]
</div>
```

### メールの設定
Contact Form 7 の「メール」タブで、以下の設定をしてください。

```
To: admin@yourdomain.com
From: wordpress@yourdomain.com
Subject: [your-subject]
Reply-To: [your-email]

企業名: [company]
氏名: [your-name]
メールアドレス: [your-email]
電話番号: [phone]

お問い合わせ内容:
[your-message]
```

### メール送信の動作確認
ローカル環境では、MailHog を使用して送信メールを確認できます。

- **MailHog の管理画面**: `http://localhost:8025`
- **MailHog の SMTP 設定**
  - SMTP ホスト: `mailhog`
  - SMTP ポート: `1025`
  - SMTP 認証: `なし`
  - SMTP 暗号化: `なし`

## ライセンス
このプロジェクトは自由に使用・改変可能ですが、自己責任でご利用ください。
