import React, { Component } from 'react';
import axios from 'axios';

import Categories from '../Categories/Categories';

const categoryURL = 'api/categories';

class Menu extends Component {
    constructor(props) {
        super(props);
        this.state = {
            categories: []
        };

        this.getCategories = this.getCategories.bind(this);
    }

    getCategories() {
        axios.get(categoryURL)
            .then(response => {
                const categories = response.data.categories.filter(category => category.active);
                this.setState({ categories });
            })
            .catch(error => console.log(error));
    }

    componentDidMount() {
        this.getCategories();
    }

    render() {
        return(
            <div>
                <Categories categories={this.state.categories}/>
            </div>
        );
    }
}

export default Menu;