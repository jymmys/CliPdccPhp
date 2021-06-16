/**
 * 
 */
package org.sieca.everis.pdcc.model.exportacion;

/**
 * @author ytorregl
 *
 */
public class Declaracion {
	
	
	private String numeroDeclaracion;
	private String fechaSolicitud;
	private String tipoDeclaracion;
	private String fechaDeclaracion;
	private String fechaTramite;
	private String resolucion;
	private String tipoDespacho;
	private String tipoCarga;
	private String observacion;
	/**
	 * 
	 */
	public Declaracion() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param numeroDeclaracion
	 * @param fechaSolicitud
	 * @param tipoDeclaracion
	 * @param fechaDeclaracion
	 * @param fechaTramite
	 * @param resolucion
	 * @param tipoDespacho
	 * @param tipoCarga
	 * @param observacion
	 */
	public Declaracion(String numeroDeclaracion, String fechaSolicitud, String tipoDeclaracion, String fechaDeclaracion,
			String fechaTramite, String resolucion, String tipoDespacho, String tipoCarga, String observacion) {
		super();
		this.numeroDeclaracion = numeroDeclaracion;
		this.fechaSolicitud = fechaSolicitud;
		this.tipoDeclaracion = tipoDeclaracion;
		this.fechaDeclaracion = fechaDeclaracion;
		this.fechaTramite = fechaTramite;
		this.resolucion = resolucion;
		this.tipoDespacho = tipoDespacho;
		this.tipoCarga = tipoCarga;
		this.observacion = observacion;
	}
	/**
	 * @return the numeroDeclaracion
	 */
	public String getNumeroDeclaracion() {
		return numeroDeclaracion;
	}
	/**
	 * @param numeroDeclaracion the numeroDeclaracion to set
	 */
	public void setNumeroDeclaracion(String numeroDeclaracion) {
		this.numeroDeclaracion = numeroDeclaracion;
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
	 * @return the tipoDeclaracion
	 */
	public String getTipoDeclaracion() {
		return tipoDeclaracion;
	}
	/**
	 * @param tipoDeclaracion the tipoDeclaracion to set
	 */
	public void setTipoDeclaracion(String tipoDeclaracion) {
		this.tipoDeclaracion = tipoDeclaracion;
	}
	/**
	 * @return the fechaDeclaracion
	 */
	public String getFechaDeclaracion() {
		return fechaDeclaracion;
	}
	/**
	 * @param fechaDeclaracion the fechaDeclaracion to set
	 */
	public void setFechaDeclaracion(String fechaDeclaracion) {
		this.fechaDeclaracion = fechaDeclaracion;
	}
	/**
	 * @return the fechaTramite
	 */
	public String getFechaTramite() {
		return fechaTramite;
	}
	/**
	 * @param fechaTramite the fechaTramite to set
	 */
	public void setFechaTramite(String fechaTramite) {
		this.fechaTramite = fechaTramite;
	}
	/**
	 * @return the resolucion
	 */
	public String getResolucion() {
		return resolucion;
	}
	/**
	 * @param resolucion the resolucion to set
	 */
	public void setResolucion(String resolucion) {
		this.resolucion = resolucion;
	}
	/**
	 * @return the tipoDespacho
	 */
	public String getTipoDespacho() {
		return tipoDespacho;
	}
	/**
	 * @param tipoDespacho the tipoDespacho to set
	 */
	public void setTipoDespacho(String tipoDespacho) {
		this.tipoDespacho = tipoDespacho;
	}
	/**
	 * @return the tipoCarga
	 */
	public String getTipoCarga() {
		return tipoCarga;
	}
	/**
	 * @param tipoCarga the tipoCarga to set
	 */
	public void setTipoCarga(String tipoCarga) {
		this.tipoCarga = tipoCarga;
	}
	/**
	 * @return the observacion
	 */
	public String getObservacion() {
		return observacion;
	}
	/**
	 * @param observacion the observacion to set
	 */
	public void setObservacion(String observacion) {
		this.observacion = observacion;
	}
	
	
	
	
	
	

}
