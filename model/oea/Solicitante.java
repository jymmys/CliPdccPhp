/**
 * 
 */
package org.sieca.everis.pdcc.model.oea;

import java.util.List;

/**
 * @author ytorregl
 *
 */
public class Solicitante {

	private String fechaSolicitud;
	private String tipoDocumentoIdentificacion;
	private String numeroDocumentoIdentificacion;
	private String nombreRazonSocial;
	private String domicilioFiscal;
	private String domicilio;
	private String correoElectronico;
	private String telefono;
	private String tipoOperador;
	private List<Adjunto> Adjuntos;
	/**
	 * 
	 */
	public Solicitante() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param fechaSolicitud
	 * @param tipoDocumentoIdentificacion
	 * @param numeroDocumentoIdentificacion
	 * @param nombreRazonSocial
	 * @param domicilioFiscal
	 * @param domicilio
	 * @param correoElectronico
	 * @param telefono
	 * @param tipoOperador
	 * @param adjuntos
	 */
	public Solicitante(String fechaSolicitud, String tipoDocumentoIdentificacion, String numeroDocumentoIdentificacion,
			String nombreRazonSocial, String domicilioFiscal, String domicilio, String correoElectronico,
			String telefono, String tipoOperador, List<Adjunto> adjuntos) {
		super();
		this.fechaSolicitud = fechaSolicitud;
		this.tipoDocumentoIdentificacion = tipoDocumentoIdentificacion;
		this.numeroDocumentoIdentificacion = numeroDocumentoIdentificacion;
		this.nombreRazonSocial = nombreRazonSocial;
		this.domicilioFiscal = domicilioFiscal;
		this.domicilio = domicilio;
		this.correoElectronico = correoElectronico;
		this.telefono = telefono;
		this.tipoOperador = tipoOperador;
		this.Adjuntos = adjuntos;
	}
	/**
	 * @return the fechaSolicitud
	 */
	public String getFechaSolicitud() {
		return fechaSolicitud;
	}
	/**
	 * @param fechaSolicitud the fechaSolicitud to set
	 */
	public void setFechaSolicitud(String fechaSolicitud) {
		this.fechaSolicitud = fechaSolicitud;
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
	 * @return the numeroDocumentoIdentificacion
	 */
	public String getNumeroDocumentoIdentificacion() {
		return numeroDocumentoIdentificacion;
	}
	/**
	 * @param numeroDocumentoIdentificacion the numeroDocumentoIdentificacion to set
	 */
	public void setNumeroDocumentoIdentificacion(String numeroDocumentoIdentificacion) {
		this.numeroDocumentoIdentificacion = numeroDocumentoIdentificacion;
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
	 * @return the domicilio
	 */
	public String getDomicilio() {
		return domicilio;
	}
	/**
	 * @param domicilio the domicilio to set
	 */
	public void setDomicilio(String domicilio) {
		this.domicilio = domicilio;
	}
	/**
	 * @return the correoElectronico
	 */
	public String getCorreoElectronico() {
		return correoElectronico;
	}
	/**
	 * @param correoElectronico the correoElectronico to set
	 */
	public void setCorreoElectronico(String correoElectronico) {
		this.correoElectronico = correoElectronico;
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
	 * @return the tipoOperador
	 */
	public String getTipoOperador() {
		return tipoOperador;
	}
	/**
	 * @param tipoOperador the tipoOperador to set
	 */
	public void setTipoOperador(String tipoOperador) {
		this.tipoOperador = tipoOperador;
	}
	/**
	 * @return the adjuntos
	 */
	public List<Adjunto> getAdjuntos() {
		return Adjuntos;
	}
	/**
	 * @param adjuntos the adjuntos to set
	 */
	public void setAdjuntos(List<Adjunto> adjuntos) {
		Adjuntos = adjuntos;
	}

	
	
	
	
}
