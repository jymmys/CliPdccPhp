/**
 * 
 */
package org.sieca.everis.pdcc.model.permiso;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class PermisoEliminarRq extends RequestBody{
	
    private String estado;
    private String tipoCertificado;
    private String correlativoTransaccion;
    private String paisRecibe;
    private String fechaHoraEnvio;
    private String ministerio;
    private String direccion;
    private String departamento;
	/**
	 * 
	 */
	public PermisoEliminarRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the estado
	 */
	public String getEstado() {
		return estado;
	}
	/**
	 * @param estado the estado to set
	 */
	public void setEstado(String estado) {
		this.estado = estado;
	}
	/**
	 * @return the tipoCertificado
	 */
	public String getTipoCertificado() {
		return tipoCertificado;
	}
	/**
	 * @param tipoCertificado the tipoCertificado to set
	 */
	public void setTipoCertificado(String tipoCertificado) {
		this.tipoCertificado = tipoCertificado;
	}
	/**
	 * @return the correlativoTransaccion
	 */
	public String getCorrelativoTransaccion() {
		return correlativoTransaccion;
	}
	/**
	 * @param correlativoTransaccion the correlativoTransaccion to set
	 */
	public void setCorrelativoTransaccion(String correlativoTransaccion) {
		this.correlativoTransaccion = correlativoTransaccion;
	}
	/**
	 * @return the paisRecibe
	 */
	public String getPaisRecibe() {
		return paisRecibe;
	}
	/**
	 * @param paisRecibe the paisRecibe to set
	 */
	public void setPaisRecibe(String paisRecibe) {
		this.paisRecibe = paisRecibe;
	}
	/**
	 * @return the fechaHoraEnvio
	 */
	public String getFechaHoraEnvio() {
		return fechaHoraEnvio;
	}
	/**
	 * @param fechaHoraEnvio the fechaHoraEnvio to set
	 */
	public void setFechaHoraEnvio(String fechaHoraEnvio) {
		this.fechaHoraEnvio = fechaHoraEnvio;
	}
	/**
	 * @return the ministerio
	 */
	public String getMinisterio() {
		return ministerio;
	}
	/**
	 * @param ministerio the ministerio to set
	 */
	public void setMinisterio(String ministerio) {
		this.ministerio = ministerio;
	}
	/**
	 * @return the direccion
	 */
	public String getDireccion() {
		return direccion;
	}
	/**
	 * @param direccion the direccion to set
	 */
	public void setDireccion(String direccion) {
		this.direccion = direccion;
	}
	/**
	 * @return the departamento
	 */
	public String getDepartamento() {
		return departamento;
	}
	/**
	 * @param departamento the departamento to set
	 */
	public void setDepartamento(String departamento) {
		this.departamento = departamento;
	}
    
    

}
