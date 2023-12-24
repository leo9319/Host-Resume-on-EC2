const app = Vue.createApp({});

app.component('my-component', {
    template: `
    <div>
      <h1>{{ message }}</h1>
    </div>
  `,
    data() {
        return {
            message: 'Hello, Vue 3!'
        };
    },
});

app.mount('#app');
