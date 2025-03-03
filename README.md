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