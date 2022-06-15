Nova.booting((Vue, router, store) => {
  // Vue.config.devtools = true
  Vue.component(
    'index-nova-multiselect',
    require('./components/IndexField').default
  )
  Vue.component(
    'detail-nova-multiselect',
    require('./components/DetailField').default
  )
  Vue.component(
    'form-nova-multiselect',
    require('./components/FormField').default
  )
})
