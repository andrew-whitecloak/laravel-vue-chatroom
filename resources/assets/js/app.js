
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('chat-log', require('./components/ChatLog.vue'));
Vue.component('chat-composer', require('./components/ChatComposer.vue'));



  const app = new Vue({
      el: '#app',
      data : {
        messageList : [
          /*{
            message : 'Hello! is a message fromr chatlog.vue',
            user : 'John Doe',
            id : 1
          },
          {
            message : 'Hi! This is a message fromr chatlog.vue',
            user : ' Jane Doe ',
            id : 2
          },
          {
            message : 'Hello! Third convo',
            user : 'Johnny Bravo',
            id : 3
          }*/
        ]
      },
      methods : {
        addMessage(message){
          //adding existing messages
          this.messageList.push(message);
          console.log( message )
          // Persist to the database etc
            axios.post('/messages', message).then(response => {
                console.log("console: " + message)
            });
        }
      },
      created(){
        axios.get('/messages').then(response => {
            //console.log(response);
            console.log('Axios is Working ')
            this.messageList = response.data;
        });
      }
  });
