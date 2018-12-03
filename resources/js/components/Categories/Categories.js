import React from 'react';

const Categories = props => (
    <nav className="navbar">
        <div className="navbar-brand">
            <a href="/" className="navbar-item">eStore</a>
        </div>

        <div className="navbar-menu">
            <div className="navbar-start">
                {props.categories.map(category =>
                    <a className="navbar-item">{category.name}</a>
                )}
            </div>
        </div>
    </nav>
);

export default Categories;