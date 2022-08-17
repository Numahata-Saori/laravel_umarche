<x-tests.app>
  <x-slot name="header">
    ヘッダー1
  </x-slot>
  コンポーネントテスト1

  {{-- x-tests.card⇒component-bladeより受け渡し --}}
  {{-- :⇒属性ではなく変数で受け渡し --}}
  <x-tests.card title="タイトル1" content="本文1" :message="$message" />
</x-tests.app>
