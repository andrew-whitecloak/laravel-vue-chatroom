<template lang="html">
  <div class="chat-log">
    <chat-message
      v-for="alias in message"
      :key="alias.id"
      :item="alias"/>
  </div>
</template>

<script>
export default {
  props : ['message']
}
</script>

<style lang="css">
</style>
