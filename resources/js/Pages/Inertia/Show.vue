<script setup>
import { Inertia } from '@inertiajs/inertia'

defineProps({
    id : String,
    blog: Object
    // 1件だけ取得する際は、ArrayではなくObjectを使う
})

const deleteConfirm = id => {
    // console.log(id)
    Inertia.delete(`/inertia/${id}`, {
        onBefore: () => confirm('本当に削除しますか？')
    })

}
</script>

<template>
{{ id }}<br>
{{ blog.title }}
<button @click="deleteConfirm(blog.id)">削除</button>
</template>
