import React, { Component } from 'react';
import axios from 'axios';

import Products from '../Products/Products';

const productURL = 'api/products';

class Content extends Component {
    constructor(props) {
        super(props);

        this.state = {
            products: []
        };

        this.getProducts = this.getProducts.bind(this);
    }

    getProducts() {
       axios.get(productURL)
           .then(response => {
               const products = response.data;
               this.setState({ products })
           })
           .catch(error => console.log(error));
    };

    componentDidMount() {
        this.getProducts();
    }

    render() {
        return(
            <div className="container">
                <img src="/storage/slider_images/35164863_1698884326856682_2220097917044129792_n_1543514900.jpg" alt=""/>
                <Products products={this.state.products} />
            </div>
        );
    }
}

export default Content;