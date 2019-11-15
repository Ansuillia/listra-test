import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
      cars: [],
      loading: true
  },
  mutations: {
      populateCars(state, cars) {
          state.cars = cars
      },
      changeLoadingState(state, loading) {
          state.loading = loading
      }
  },
  actions: {
      loadCars({ commit }) {
          axios.get('/api/cars')
               .then(r => {
                    commit('populateCars', r.data.data)
                    commit('changeLoadingState', false)
               })
      }
  },
  modules: {
  }
})
