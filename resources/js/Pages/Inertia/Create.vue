<script setup>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

defineProps({
    errors: Object
})

const form = reactive({
    title: null,
    content: null
})

const submitFunction = () => {
    Inertia.post('/inertia', form)
}
//store通信のurlにアクセルする必要があるので、'/inertia'
//第2引数で渡す値を設定

</script>

<template>
    <form @submit.prevent="submitFunction">
        <input type="text" name="title" v-model="form.title"><br>
        <div v-if="errors.title">{{ errors.title }}</div>
        <input type="text" name="content" v-model="form.content"><br>
        <div v-if="errors.content">{{ errors.content }}</div>
        <button>送信</button>
    </form>
<!-- Pages/InrtiaTest.vueでは、method="post" :data でpost通信していたが、jsを使う -->
</template>

<!-- @submit.prevent
@は何を意味するの？
Vue.jsでは、イベントリスナーを登録するために@を使用。
@clickは「ボタンがクリックされたとき」、@submitは「フォームが送信されたとき」のイベントを監視。
@submitとは？
@submitは「フォームが送信されたときに何かを実行する」という指示。
通常、フォームを送信するとブラウザはそのままページをリロードして送信先にデータを送る。
.preventは何をするの？
.preventはVue.jsの修飾子。
修飾子は特定の動作を変更する便利な機能。
.preventは「デフォルトの動作を防ぐ（prevent）」。
デフォルトの動作とは？
HTMLフォームは、送信されるとブラウザがページをリロードする（これはフォームのデフォルトの動き）。
しかし、Vue.jsや他のJavaScriptでフォームを送信したい場合、このリロードを止める必要がある。
preventがない場合
もし.preventを付けなかった場合、フォーム送信時にページがリロードされ、JavaScriptの処理が行われなくなる可能性がある。 -->
