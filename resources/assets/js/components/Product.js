import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class Product extends Component {
    constructor(props) {
        super(props);

        this.state = {
            products: []
        }
    }

    componentDidMount() {
        fetch('/api/products')
        .then(response => {
            return response.json();
        })
        .then(products => {
            this.setState({ products });
        });
    }



    renderProducts() {
        return this.state.products.map((product, i) => {
            return (
                <div className="col-lg-4 col-md-6 mb-4">
                    <div className='card h-100'>
                        <p key={product.id}/>
                        <a href="#"><img className="card-img-top" src={product.image} /></a>
                        <div className="card-body">
                            <h4 className="card-title">
                                <a href="#">{product.name}</a>
                            </h4>
                            <h5>${product.price}</h5>
                            <p className="card-text">{product.description}</p>
                            <button type="button" className="btn btn-primary form-control" onClick={this.AddToCart}> Add To Cart</button>
                        </div>
                    </div>
                </div>
            );
        })
    }


    render() {
        return (
            
            <div className="">
                <h2>List of Products</h2>
                <div className="row">
                    {this.renderProducts()}
                </div>
            </div>
                        
            
        );
    }
}

if (document.getElementById('product')) {
    ReactDOM.render(<Product />, document.getElementById('product'));
}
