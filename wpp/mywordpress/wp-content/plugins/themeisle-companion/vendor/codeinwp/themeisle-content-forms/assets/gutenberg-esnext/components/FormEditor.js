/**
 * WordPress dependencies
 */
// import { map } from 'lodash';
const {Component} = wp.element;
const {Placeholder, Spinner, withAPIData, FormToggle} = wp.components;
const {__} = wp.i18n;
const {
	Editable,
	BlockEdit,
	InspectorControls
} = wp.blocks;

const fieldStyle = {
	width: '40%',
	display: 'inline-block'
}

const fieldStyleR = {
	width: '10%',
	display: 'inline-block',
	textAlign: 'right'
}

class FormEditor extends Component {
	constructor() {
		super(...arguments);
		this.form_type = this.props.name.replace('content-forms/', '')
		this.config = window['content_forms_config_for_' + this.form_type]
	}

	render() {
		const component = this
		const { attributes, setAttributes, focus } = this.props
		const {fields} = attributes
		const placeholderEl = <Placeholder key="form-loader" icon="admin-post" label={__('Form')}>
			<Spinner/>
		</Placeholder>
		let controlsEl = []
		let fieldsEl = []

		_.each(component.config.controls, function (args, key) {

			controlsEl.push(<div key={key}>
				<BlockEdit key={'block-edit-custom-' + key}/>
				<InspectorControls.TextControl
					key={key}
					label={args.label}
					value={attributes[key] || ''}
					onFocus={ f => {
						console.log(f)
					}}
					onChange={value => {
						let newValues = {}
						newValues[key] = value
						setAttributes(newValues)
					}}
				/>
			</div>)
		})

		_.each(fields, function (args, key) {
			let val = ''
			let field_id = args.field_id
			let field_config = component.config.fields[field_id]
			let isRequired = false

			if (typeof args.label === "object") {
				val = args.label[0]
			} else if (typeof args.label === "string") {
				val = [args.label]
			}

			if (typeof args.requirement !== "undefined") {
				isRequired = args.requirement
			}

			const focusOn = 'field-' + field_id

			fieldsEl.push(<div key={key} style={{border: '1px solid #333', padding: '5px', margin: '5px', borderRadius: '8px'}} className="content-form-field">

				<fieldset style={fieldStyle}>
					<Editable
						value={val}
						tagName="label"
						placeholder={__('Label for ') + field_id}
						className="content-form-field-label"
						onChange={(value) => {
							let newValues = attributes.fields
							newValues[key]['label'] = value
							setAttributes({fields: newValues})
							component.forceUpdate()
						}}/>
				</fieldset>

				<fieldset style={fieldStyle}>
					<select
						name="field-type-select"
						value={typeof args['type'] !== "undefined" ? args['type'] : 'text'}
						onChange={(event) => {
							let newValues = attributes.fields
							newValues[key]['type'] = event.target.selected
							setAttributes({fields: newValues})
							component.forceUpdate()
						}}>
						<option value="text" key="text">text</option>
						<option value="textarea" key="textarea">textarea</option>
						<option value="password" key="password">password</option>
						<option value="email" key="email">email</option>
						<option value="number" key="number">number</option>
					</select>
				</fieldset>

				<fieldset style={fieldStyleR}>
					<FormToggle
						checked={isRequired}
						showHint={false}
						onChange={(event) => {
							let newValues = attributes.fields
							newValues[key]['requirement'] = event.target.checked
							setAttributes({fields: newValues})
							component.forceUpdate()
						}}
					/>
				</fieldset>

			</div>)
		})

		return [
			focus && (<InspectorControls key="inspector">
				<h3>{__('Form Settings')}</h3>
				{controlsEl}
			</InspectorControls>),
			(<div key="fields" className={'fields ' + component.props.className} data-uid={attributes.uid}>
				{(fieldsEl === [])
					? placeholderEl
					: fieldsEl}
			</div>)
		]
	}
}

export const ContentFormEditor = withAPIData(() => {
	return {
		ContentForm: '/content-forms/v1/forms',
	};
})(FormEditor);
