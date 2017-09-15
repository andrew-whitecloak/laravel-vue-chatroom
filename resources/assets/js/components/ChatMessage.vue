<template lang="html">
  <div class="chat-message">
    <p> {{ item.message }}</p>
    <small> {{ item.user.name }}</small>
  </div>
</template>

<script>
export default {
  props : ['item']
}
</script>

<style lang="css">
.chat-message {
  padding : 1rem;
}
.chat-message p {
  font-weight: 500;
}
.chat-message:nth-child(even) {
  background: cadetblue;
}
</style>
