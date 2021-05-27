
let my_variations = false;
if (typeof variations !== 'undefined') {
  my_variations = JSON.parse(variations.data)
}
console.log(my_variations);




class VariationManager {
  current_search = [];

  constructor(variations){
    this.container = document.querySelector('.copa_interaction_container')
    this.add_to_cart_button = this.container.querySelector('.Add_to_cart')
    this.add_to_cart_button.onclick = _ => {this.add_to_cart()}
    this.all_variations = variations;

    if(variations){
      this.price = variations
      console.log('precio: ', this.all_variations[0].display_price);

      this.selectBoxes = [...this.container.querySelectorAll('.copa_select_blob')];
      this.__active_selectBoxes = [];
      this.__deactivate_add_to_cart_button();


      let inputs = [...this.container.querySelectorAll('input')]
      inputs.map( input => {
        input.onchange = _ =>{ this.search() }
      });

      for (var i = this.selectBoxes.length - 1; i > 0; i--) {
        this.__hide_and_clear_selectBox(this.selectBoxes[i]);
      }
    }
  }


  search(){
    this.__internal_search()

    // si no hay ninguna opcion disponible vaciar selectBoxes uno a uno
    // del ultimo al primero hasta que haya mas de 0 opciones
    let no_option_found = this.current_search.length == 0;
    if (no_option_found) {
      let last_active = this.__get_last_active_selectBox()
      this.__show_all_options(last_active);
      this.__hide_and_clear_selectBox(last_active);
      this.search();
    }
    // si hay una sola opcion activar boton de añadir al carrito
    // y otros posibles cambios, textos, precio, etc.
    let unique_option_found = this.current_search.length == 1;
    if( unique_option_found ){
      this.__hide_and_clear_inactive_selectBoxes();
      this.__activate_add_to_cart_button();
      this.__show_price();
    } else {
      this.__deactivate_add_to_cart_button();
      this.__hide_price();
    }
    // si hay mas de una opcion, mostrar el siguiente selectBox
    let more_options_found = this.current_search.length > 1;
    if (more_options_found) {
      let next_selectBox = this.__get_next_selectBox()
      this.__hide_unwanted_options(next_selectBox);
      this.__show_selectBox(next_selectBox)
    }
  }


  __get_next_selectBox(){
    let next_selectBox = this.selectBoxes.reduce((a, selectBox) => (
      a ? a : (!this.__active_selectBoxes.includes(selectBox) ? selectBox : false)
    ), false)
    return next_selectBox;
  }
  __get_last_active_selectBox(){
    let last = this.__active_selectBoxes.length - 1
    return this.__active_selectBoxes[last]
  }
  __hide_and_clear_inactive_selectBoxes(){
    let inactive_selectBoxes = this.selectBoxes.filter(x => x.querySelector('.selectBoxInput:checked').value == 0)
    inactive_selectBoxes.map(x => this.__hide_and_clear_selectBox(x))
  }
  __hide_and_clear_selectBox(selectBox){
    this.__hide_selectBox(selectBox);
    this.__clear_selectBox(selectBox);
  }
  __hide_selectBox(selectBox){ selectBox.style.display = 'none' }
  __clear_selectBox(selectBox){ selectBox.querySelector('input').click() }
  __show_selectBox(selectBox){ selectBox.style.display = 'grid' }




  __internal_search(){
    this.current_search = this.all_variations;
    this.__active_selectBoxes = this.selectBoxes.filter(x => x.querySelector('.selectBoxInput:checked').value != 0)

    // por cada select box != 0
    let selected = [...this.container.querySelectorAll('.selectBoxInput:checked:not([value="0"])')];
    selected.map( input => {
      let key   = input.dataset.key;
      let value = input.value;
      // eliminar de current search toda variacion que no tenga key = value
      this.current_search = this.current_search.filter(v => v.attributes[key] == value)
    })
  }


  __get_variation_string(){
    let variation = this.current_search[0];
    return Object.values(variation.attributes).map(x => (x == '') ? '-' : x).join(' ');
  }
  __activate_add_to_cart_button(){
    let button    = this.add_to_cart_button;
    let variation = this.current_search[0];

    let variation_string = this.__get_variation_string();


    let var_string = document.querySelector('#Variation_string');
    var_string.innerText = variation_string;
    var_string.style.display = 'block';

    button.dataset.variationId = variation.variation_id
    button.dataset.variation = variation_string
    button.innerText = "Añadir a la cesta";
    button.disabled = false;
  }
  __show_price(){
    let price_tag = this.container.querySelector('#singleSidePrice')
    price_tag.innerHTML = this.current_search[0].display_price + '€';
  }
  __hide_price(){
    let price_tag = this.container.querySelector('#singleSidePrice')
    price_tag.innerHTML = '-';
  }



  __deactivate_add_to_cart_button(){
    let var_string = document.querySelector('#Variation_string');
    var_string.innerText = '';
    var_string.style.display = 'none';

    let button       = this.add_to_cart_button;
    button.dataset.variationId = '';
    button.dataset.variation = '';
    button.innerText = "Elige una opcion unica";
    button.disabled = true;
  }



  // TODO: poner esto en silversea para ahorrar 10 lineas de JS
	__hide_unwanted_options(selectBox){
    let options = [...selectBox.querySelectorAll('.selectBoxOption')];
    // let options = [...this.container.querySelectorAll('.selectBoxOption')];
		options.map( option =>{
			let input = option.querySelector('.selectBoxInput');
			if (input.value != 0){
        let key   = input.dataset.key;
        let value = input.value;

        let found = this.current_search.reduce((a, c) => a || c.attributes[key] == value, false)
        option.style.display = found ? 'block' : 'none';
			}
		})
	}
	__show_all_options(selectBox){
    let options = [...selectBox.querySelectorAll('.selectBoxOption')];
		options.forEach( option =>{
      option.style.display = 'block';
		})
	}




  add_to_cart(){
    var formData = new FormData();

    if (this.all_variations) {
      let attributes = this.current_search[0].attributes;
      for (const key in attributes) {
        attributes[key] = (attributes[key] == '') ? '-' : attributes[key];
      }
      formData.append( 'variation', JSON.stringify(attributes));
    }



    let button       = this.add_to_cart_button;
    let parent       = button.parentElement;
    let product_id   = button.dataset.productId;
    let variation_id = button.dataset.variationId;
    let variation    = button.dataset.variation;
    let quantity     = parent.querySelector('.cuantosQantity').value


    if(!variation_id){
      alert('selecciona una opcion unica')
      return;
    }

    formData.append( 'action', 'woocommerce_add_variation_to_cart' );
    formData.append( 'product_id', product_id );
    formData.append( 'variation_id', variation_id );
    formData.append( 'quantity', quantity );


    ajax2(formData).then( respuesta => {
      // c.log(respuesta);
      // console.log(redirect.to);
      window.location.href = redirect.to;
      // d.querySelector('.cart_butt_number').innerText = respuesta.count;
    });


  }
}











let variation_manager = new VariationManager(my_variations);
