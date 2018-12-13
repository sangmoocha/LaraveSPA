export default {
    state: {
        welcomeMassage: 'Webcom to my vue app'
    }, 
    getters: {
        welcome(state) {
            return state.welcomeMassage;
        }
    },
    mutations: {},
    actions: {}
};