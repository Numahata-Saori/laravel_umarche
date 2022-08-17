{{-- @props⇒componentを使う際に属性がない場合を作る際に使う(type1,2と複数ある場合に初期値を設定し、変更部分をviewに記載) --}}
@props([
  'title',
  'message' => '初期値でふ。',
  'content' => '本文初期値でしゅ。'
])

<div {{ $attributes->merge(['class' => 'border-2 shadow-md w-1/4 p-2']) }} >
  {{-- 属性で受け渡し⇒component-blade→view-bladeに直書き --}}
  {{-- 変数で受け渡し⇒component-blade→view-blade→Controllerに直書き(:message) --}}
  <div>{{ $title }}</div>
  <div>画像</div>
  <div>{{ $content }}</div>
  <div>{{ $message }}</div>
</div>
