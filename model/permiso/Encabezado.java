/**
 * 
 */
package org.sieca.everis.pdcc.model.permiso;

/**
 * @author ytorregl
 *
 */
public class Encabezado {
	
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
	public Encabezado() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @param tipoCertificado
	 * @param correlativoTransaccion
	 * @param paisRecibe
	 * @param fechaHoraEnvio
	 * @param ministerio
	 * @param direccion
	 * @param departamento
	 */
	public Encabezado(String tipoCertificado, String correlativoTransaccion, String paisRecibe, String fechaHoraEnvio,
			String ministerio, String direccion, String departamento) {
		super();
		this.tipoCertificado = tipoCertificado;
		this.correlativoTransaccion = correlativoTransaccion;
		this.paisRecibe = paisRecibe;
		this.fechaHoraEnvio = fechaHoraEnvio;
		this.ministerio = ministerio;
		this.direccion = direccion;
		this.departamento = departamento;
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
