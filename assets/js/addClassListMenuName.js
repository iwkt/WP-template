// クラスnameをつける
//メニューにカレントページかどうかの判定に使える

const bodyTag = document.querySelector("body"); // body要素を選択
const targetItem = document.querySelector(".classname"); //クラス名を入れる。
if (bodyTag.classList.contains("page-id-51")) {
  //page-id-51はWPでbodyに自動的に振られるclass名なので環境に応じて変更する
  targetItem.classList.add("current-page-item"); //クラス名の追加
} else {
  targetItem.classList.remove("current-page-item"); //クラス名の削除
}
