<div class="border-2 shadow-md w-1/4 p-2">
  {{-- 属性で受け渡し⇒component-blade→view-bladeに直書き --}}
  {{-- 変数で受け渡し⇒component-blade→view-blade→Controllerに直書き(:message) --}}
  <div>{{ $title }}</div>
  <div>画像</div>
  <div>{{ $content }}</div>
  <div>{{ $message }}</div>
</div>
