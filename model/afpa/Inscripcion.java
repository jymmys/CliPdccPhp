/**
 * 
 */
package org.sieca.everis.pdcc.model.afpa;

/**
 * @author ytorregl
 *
 */
public class Inscripcion {
	
	    private String tipoPersona;
	    private String nombreRazonSocial;
	    private String tipoDocumentoIdentificacion;
	    private String numeroDocumentoIdentidad;
	    private String domicilioFiscal;
	    private String direccionNotificaciones;
	    private String telefono;
	    private PersonaAutorizada personaAutorizada;
		/**
		 * 
		 */
		public Inscripcion() {
			super();
			// TODO Auto-generated constructor stub
		}
		/**
		 * @param tipoPersona
		 * @param nombreRazonSocial
		 * @param tipoDocumentoIdentificacion
		 * @param numeroDocumentoIdentidad
		 * @param domicilioFiscal
		 * @param direccionNotificaciones
		 * @param telefono
		 * @param personaAutorizada
		 */
		public Inscripcion(String tipoPersona, String nombreRazonSocial, String tipoDocumentoIdentificacion,
				String numeroDocumentoIdentidad, String domicilioFiscal, String direccionNotificaciones,
				String telefono, PersonaAutorizada personaAutorizada) {
			super();
			this.tipoPersona = tipoPersona;
			this.nombreRazonSocial = nombreRazonSocial;
			this.tipoDocumentoIdentificacion = tipoDocumentoIdentificacion;
			this.numeroDocumentoIdentidad = numeroDocumentoIdentidad;
			this.domicilioFiscal = domicilioFiscal;
			this.direccionNotificaciones = direccionNotificaciones;
			this.telefono = telefono;
			this.personaAutorizada = personaAutorizada;
		}
		/**
		 * @return the tipoPersona
		 */
		public String getTipoPersona() {
			return tipoPersona;
		}
		/**
		 * @param tipoPersona the tipoPersona to set
		 */
		public void setTipoPersona(String tipoPersona) {
			this.tipoPersona = tipoPersona;
		}
		/**
		 * @return the nombreRazonSocial
		 */
		public String getNombreRazonSocial() {
			return nombreRazonSocial;
		}
		/**
		 * @param nombreRazonSocial the nombreRazonSocial to set
		 */
		public void setNombreRazonSocial(String nombreRazonSocial) {
			this.nombreRazonSocial = nombreRazonSocial;
		}
		/**
		 * @return the tipoDocumentoIdentificacion
		 */
		public String getTipoDocumentoIdentificacion() {
			return tipoDocumentoIdentificacion;
		}
		/**
		 * @param tipoDocumentoIdentificacion the tipoDocumentoIdentificacion to set
		 */
		public void setTipoDocumentoIdentificacion(String tipoDocumentoIdentificacion) {
			this.tipoDocumentoIdentificacion = tipoDocumentoIdentificacion;
		}
		/**
		 * @return the numeroDocumentoIdentidad
		 */
		public String getNumeroDocumentoIdentidad() {
			return numeroDocumentoIdentidad;
		}
		/**
		 * @param numeroDocumentoIdentidad the numeroDocumentoIdentidad to set
		 */
		public void setNumeroDocumentoIdentidad(String numeroDocumentoIdentidad) {
			this.numeroDocumentoIdentidad = numeroDocumentoIdentidad;
		}
		/**
		 * @return the domicilioFiscal
		 */
		public String getDomicilioFiscal() {
			return domicilioFiscal;
		}
		/**
		 * @param domicilioFiscal the domicilioFiscal to set
		 */
		public void setDomicilioFiscal(String domicilioFiscal) {
			this.domicilioFiscal = domicilioFiscal;
		}
		/**
		 * @return the direccionNotificaciones
		 */
		public String getDireccionNotificaciones() {
			return direccionNotificaciones;
		}
		/**
		 * @param direccionNotificaciones the direccionNotificaciones to set
		 */
		public void setDireccionNotificaciones(String direccionNotificaciones) {
			this.direccionNotificaciones = direccionNotificaciones;
		}
		/**
		 * @return the telefono
		 */
		public String getTelefono() {
			return telefono;
		}
		/**
		 * @param telefono the telefono to set
		 */
		public void setTelefono(String telefono) {
			this.telefono = telefono;
		}
		/**
		 * @return the personaAutorizada
		 */
		public PersonaAutorizada getPersonaAutorizada() {
			return personaAutorizada;
		}
		/**
		 * @param personaAutorizada the personaAutorizada to set
		 */
		public void setPersonaAutorizada(PersonaAutorizada personaAutorizada) {
			this.personaAutorizada = personaAutorizada;
		}
	    
	    
	
	

	
	


	    
	    
	

}
