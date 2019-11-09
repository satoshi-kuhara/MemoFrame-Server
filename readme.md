# MemoFrame Server

## Overview
MemoFrame(<https://github.com/satoshi-kuhara/MemoFrame/>)のサーバーサイドを構成しています。
使用DBはMySQLです。

## リクエストとレスポンス
### GET
http://yourhost/api/message?key=GET_KEY (GET_KEYは.envで設定)

GET_KEYが正しければ、以下のレスポンスが返ってきます。
```
{
    "message": "Message",
    "color": 1
}
```
colorは0から4まであります。全5色をアプリサイドで設定しています。

### POST
http://yourhost/api/message

以下のリクエストで正しいPOST_KEYと一緒に送信すると、DBに登録されます。
```
{
    "message": "Message You Want to Send.",
    "color": 2,
    "key": "POST_KEY(.envで設定)"
}
```
## その他
.envのINPUT_URLを設定すると、そのURLでメッセージを送信できるWebページにアクセスできます。

http://yourhost/INPUT_URL
