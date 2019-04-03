import React from 'react';
import './Search.scss';
import locations from '../../information/locations';
import filters from '../../information/filters';

const Search = props => (
    <div className="col-md-3 col-md-pull-9">
        <div className="section-title line-style">
            <h3 className="title">Search Options</h3>
        </div>
        <div className="right-box">
            <div className="row">
                <input type="hidden" id="back" value="true" />
                <input type="hidden" id="browse-page" value="true" />
                <div className="col-md-12 space-div">
                    <input className="form-control" type="text" name="prop-name" id="prop-name" placeholder="Property Name" onChange={event => {
                        props.search('name', event.target.value)
                    }
                    } value={props.filters.name} />
                </div>
                <div className="col-md-12 space-div" id="cities-dropdown">
                    <select className="dropdown" id="cities" onChange={event => {
                        props.search('city', event.target.value)
                    }
                    } value={props.filters.city}>
                        <option value="">-- All Cities --</option>
                        {
                            locations.map(location => <option value={location} key={location}>{location}</option>)
                        }
                    </select>
                </div>
                <div className="col-md-6 space-div">
                    <label>Beds</label>
                    <input className="form-control" type="number" name="bedroom" id="bedroom" placeholder="1" onChange={event => {
                        let num = (event.target.value < 1) ? 1 : event.target.value;
                        props.search('beds', num);
                    }
                    } value={props.filters.beds} />
                </div>
                <div className="col-md-6 space-div">
                    <label>Baths</label>
                    <input className="form-control" type="number" name="bathroom" id="bathroom" placeholder="1" onChange={event => {
                        let num = (event.target.value < 1) ? 1 : event.target.value;
                        props.search('baths', num);
                    }
                    } value={props.filters.baths} />
                </div>
                <div className="col-md-12 space-div">
                    <label>Check In</label>
                    <input className="form-control" type="date" name="checkin" id="checkin" placeholder="Check In" />
                </div>
                <div className="col-md-12 space-div">
                    <label>Check Out</label>
                    <input className="form-control" type="date" name="checkout" id="checkout" placeholder="Check Out" />
                </div>
            </div>
        </div>
        <div className="section-title line-style no-margin">
            <h3 className="title">Filters</h3>
        </div>
        <div id="filter-box">
            {
                filters.map(filter => {
                    return <div className="filter" key={filter} data-value={filter}>{filter}</div>
                })
            }
            <div className="filter" data-value="On Lake Huron">On Lake Huron</div>
        </div>
        <small><b><i>Click Filter To Apply</i></b></small>
    </div>
);

export default Search;