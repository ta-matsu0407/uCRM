<script setup>
import Label from '@/Components/InputLabel.vue'
import Input from '@/Components/TextInput.vue'
import GuestLayout from '@/Layouts/GuestLayout.vue'
// '@'をつけることで、resources/jsからスタートする

const emitTest = e => console.log(e)
// 引数が1つの場合は()を省略できる
// 1行で書く場合は{}を省略できる
</script>

<template>
<GuestLayout>
<Label>タイトル</Label>
<Input
 modelValue="初期値です"
 @update:modelValue="emitTest"
 ></Input>
  <!-- 親コンポーネントで実行したいメソッドを記載 -->
  <!-- 子コンポーネント(TextInput)で書いてあるinputの値を親で実行 -->
  <!-- 子コンポーネントでイベントが起これば、親の関数も動かせる -->
</GuestLayout>
</template>
