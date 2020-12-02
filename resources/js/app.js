import './bootstrap'
import Vue from 'vue'
import ArticleVote from './components/ArticleVote'

const app = new Vue({
  el: '#app',
  components: {
    ArticleVote,
  }
})