<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';

const newTitle = ref('')
const newContent = ref('')
</script>

<template>
Inertiaテストです。<br>
<a href="/">aタグでWelcomeに移動</a><br>
<Link href="/">LinkでWelcomeに移動</Link><br>
<Link :href="route('inertia.index')">名前付きルートの確認</Link><br>
<Link :href="route('inertia.show', { id : 1 })">ルートパラメータの確認</Link><br>

<div class="mb-8"></div>
<input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
<!-- 入力した内容がリアルタイムに表示されることを確認 -->
<input type="text" name="newContent" v-model="newContent">{{ newContent }}<br>

<Link as="button" method="post" :href="route('inertia.store')"
:data="{
    title: newTitle,
    content: newContent
}">DB保存テスト</Link>
</template>

