<template lang="html">
  <div class="chat-composer">
    <input type="text" name="" value="" placeholder="start typing something ..."
    v-model="messageText" @keydown.enter="sendMessage">
    <input type="submit" class="btn btn-primary" name="" value="send"
    @click="sendMessage">
  </div>
</template>

<script>
export default {
  data(){
    return {
      messageText: '',
    }
  },
  methods : {
    sendMessage(){
      console.log(this.messageText);
      this.$emit('messagesent', {
        message: this.messageText,
        user : {
          name : document.getElementById('username').innerText
        }
      });
      this.messageText = '';
    }
  }
}
</script>

<style lang="css">
.chat-composer {
  display : flex;
}
.chat-composer input[type='text'] {
  flex : 1 auto;
  padding : 1rem;
}

</style>
