import React from 'react';

const Products = props => (
    <div className="columns">
        {props.products.map(product =>
            <div className="column is-3">
                <div className="card">
                    <header className="card-header">
                        <p className="card-header-title">{product.name}</p>
                    </header>

                    <div className="card-image">
                        <figure className="image">
                            <img src={`/storage/product_images/${product.image}`} alt={product.name}/>
                        </figure>
                    </div>

                    <div className="card-content">
                        <span>NOK {product.price}</span>
                    </div>

                    <footer className="card-footer">
                        <button className="button is-fullwidth">Buy</button>
                    </footer>
                </div>
            </div>
        )}
    </div>
);

export default Products;