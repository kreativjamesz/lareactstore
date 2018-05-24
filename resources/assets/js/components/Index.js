import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Navigation from './Navigation';
import Product from './Product';

export default class Index extends Component {
    render() {
        return (
            <div>
                <Navigation/>
                <div className="container-fluid">
                    <div className="row">
                        <div className="col-lg-3">
                            <h2>Add New Product</h2>
                            <div className="list-group">
                                <a href="#" className="list-group-item">Category 1</a>
                                <a href="#" className="list-group-item">Category 2</a>
                                <a href="#" className="list-group-item">Category 3</a>
                            </div>
                        </div>
                        <div className="col-lg-9">
                            <div className="row">
                                <div className="col">
                                    <Carousel />
                                </div>
                            </div>
                            <Product />
                        </div>
                    </div>
                    
                </div>
            </div>
        );
    }
}

if (document.getElementById('index')) {
    ReactDOM.render(<Index />, document.getElementById('index'));
}
